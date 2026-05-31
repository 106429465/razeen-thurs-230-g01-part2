<?php
// Gemini assisted with the development of this code
/**
 * Assignment Part 2 - Expression of Interest Processing Script
 * File Name: process_eoi.php
 * Description: Validates, sanitises, and saves user EOI submissions to a MySQL database.
 */

// =========================================================================
// 1. BLOCK DIRECT URL ACCESS (Requirement)
// =========================================================================
// Check if the request method is POST and if a critical required field exists.
// If not, redirect the user safely back to the application form using a relative path.
if ($_SERVER["REQUEST_METHOD"] !== "POST" || !isset($_POST["first_name"])) {
    header("Location: apply.php");
    exit(); // Stop all further script execution immediately
}

// =========================================================================
// 2. INPUT SANITATION FUNCTION (Requirement)
// =========================================================================
/**
 * Sanitises raw user input data to prevent security vulnerabilities.
 * Uses trim, stripslashes, and htmlspecialchars as mandated by the assignment brief.
 */
function sanitise_input($data)
{
    $data = trim($data); // Remove accidental leading/trailing spaces
    $data = stripslashes($data); // Remove backslashes from input string
    $data = htmlspecialchars($data); // Convert special characters to HTML entities (Prevents XSS)
    return $data;
}

// =========================================================================
// 3. RETRIEVE AND SANITISE FORM DATA
// =========================================================================
$job_ref_num = sanitise_input($_POST["job_ref_num"]);
$first_name = sanitise_input($_POST["first_name"]);
$last_name = sanitise_input($_POST["last_name"]);
$date_of_birth = sanitise_input($_POST["date_of_birth"]);
$street_address = sanitise_input($_POST["street_address"]);
$suburb = sanitise_input($_POST["suburb"]);
$state = sanitise_input($_POST["state"]);
$postcode = sanitise_input($_POST["postcode"]);
$email = sanitise_input($_POST["email"]);
$phone_number = sanitise_input($_POST["phone_number"]);
$other_skills = sanitise_input($_POST["other_skills"]);

// Radio buttons: If a user doesn't select a gender, the POST key won't exist.
$gender = isset($_POST["gender"]) ? sanitise_input($_POST["gender"]) : "";

// Checkboxes: Safely loop through the array, sanitise each element, and glue them into a string
if (isset($_POST["skills"]) && is_array($_POST["skills"])) {
    $sanitised_skills_array = array_map("sanitise_input", $_POST["skills"]);
    $skills_string = implode(", ", $sanitised_skills_array);
} else {
    $skills_string = "";
}

// =========================================================================
// 4. SERVER-SIDE DATA VALIDATION (Requirement)
// =========================================================================
$errors = []; // Initialise an empty array to log validation errors

// Validate required fields are not empty
if (empty($job_ref_num)) {
    $errors[] = "Job reference number is required.";
}
if (empty($first_name)) {
    $errors[] = "First name is required.";
}
if (empty($last_name)) {
    $errors[] = "Last name is required.";
}
if (empty($date_of_birth)) {
    $errors[] = "Date of birth is required.";
}
if (empty($gender)) {
    $errors[] = "Gender selection is required.";
}
if (empty($street_address)) {
    $errors[] = "Street address is required.";
}
if (empty($suburb)) {
    $errors[] = "Suburb is required.";
}
if (empty($state)) {
    $errors[] = "State selection is required.";
}
if (empty($postcode)) {
    $errors[] = "Postcode is required.";
}
if (empty($email)) {
    $errors[] = "Email address is required.";
}
if (empty($phone_number)) {
    $errors[] = "Phone number is required.";
}

// Validate data formats using regular expressions (preg_match) & strict rules
if (!empty($job_ref_num) && !preg_match("/^[a-zA-Z0-9]{5}$/", $job_ref_num)) {
    $errors[] =
        "Job reference number must be exactly 5 alphanumeric characters.";
}
if (
    !empty($first_name) &&
    (!preg_match("/^[a-zA-Z\s]+$/", $first_name) || strlen($first_name) > 20)
) {
    $errors[] =
        "First name must contain only alphabetical characters and be 20 characters or less.";
}
if (
    !empty($last_name) &&
    (!preg_match("/^[a-zA-Z\s]+$/", $last_name) || strlen($last_name) > 20)
) {
    $errors[] =
        "Last name must contain only alphabetical characters and be 20 characters or less.";
}
if (!empty($postcode) && !preg_match("/^[0-9]{4}$/", $postcode)) {
    $errors[] = "Postcode must be exactly 4 digits.";
}
if (
    !empty($phone_number) &&
    !preg_match("/^[0-9]{10}$/", str_replace(" ", "", $phone_number))
) {
    $errors[] = "Phone number must be exactly 10 digits.";
}
if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Please enter a valid email address format.";
}

// Validate State matches Australian standard options
$valid_states = ["VIC", "NSW", "QLD", "NT", "WA", "SA", "TAS", "ACT"];
if (!empty($state) && !in_array(strtoupper($state), $valid_states)) {
    $errors[] =
        "State must be one of the following: " . implode(", ", $valid_states);
}

// Validate Age Limit (Applicant must be between 15 and 80 years old)
if (!empty($date_of_birth)) {
    $dob = new DateTime($date_of_birth);
    $today = new DateTime();
    $age = $today->diff($dob)->y;
    if ($age < 15 || $age > 80) {
        $errors[] = "Applicants must be between 15 and 80 years old.";
    }
}

// =========================================================================
// 5. DATABASE CONNECTION AND TABLE CREATION (Requirement)
// =========================================================================
// Include the shared group settings file using a safe relative path
require_once "../settings.php";

// Establish the connection to MySQL using your group's exact variable names.
$conn = @mysqli_connect($host, $user, $pwd, $sql_db);

// Check if the connection was successful
if (!$conn) {
    die(
        "<main><h1>Database Connection Error</h1><p>Could not connect to the local server. Please check your MySQL service.</p></main>"
    );
}

// SQL query to automatically create the table if it does not already exist
$sql_table = "CREATE TABLE IF NOT EXISTS eoi (
    eoi_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    job_ref_num VARCHAR(20) NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    date_of_birth DATE NOT NULL,
    gender VARCHAR(20) NOT NULL,
    street_address VARCHAR(100) NOT NULL,
    suburb VARCHAR(50) NOT NULL,
    state CHAR(3) NOT NULL,
    postcode CHAR(4) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    skills TEXT DEFAULT NULL,
    other_skills TEXT DEFAULT NULL,
    status ENUM('New', 'Current', 'Final') NOT NULL DEFAULT 'New'
);";

// Execute table creation query inside the code
if (!mysqli_query($conn, $sql_table)) {
    die("<p>Error setting up database table: " . mysqli_error($conn) . "</p>");
}

// =========================================================================
// 6. PROCESS VALIDATION RESULTS AND SQL INSERTION
// =========================================================================
if (empty($errors)) {
    // Construct the SQL prepared statement for data insertion
    $query = "INSERT INTO eoi (job_ref_num, first_name, last_name, date_of_birth, gender, street_address, suburb, state, postcode, email, phone_number, skills, other_skills) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
              
    $stmt = mysqli_prepare($conn, $query);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssssssssssss", 
            $job_ref_num, $first_name, $last_name, $date_of_birth, $gender, 
            $street_address, $suburb, $state, $postcode, $email, $phone_number, 
            $skills_string, $other_skills
        );
        
        if (mysqli_stmt_execute($stmt)) {
            $eoi_number = mysqli_insert_id($conn);
            
            // 1. INCLUDE HEADER FOR SUCCESS PAGE
            $current_page = 'Apply Status';
            include 'include/header.inc';
            
            echo "<main id='main-content'>";
            echo "<h1>Application Submitted Successfully</h1>";
            echo "<p>Thank you, <strong>" . $first_name . " " . $last_name . "</strong>. Your expression of interest has been safely recorded.</p>";
            echo "<p>Your unique generated EOInumber is: <strong>" . $eoi_number . "</strong>.</p>";
            echo "<p><a href='apply.php'>Return to Form</a></p>";
            echo "</main>";
            
            // 2. INCLUDE FOOTER FOR SUCCESS PAGE
            include 'include/footer.inc';
            
        } else {
            echo "<p>Execution Error: Could not save records to database.</p>";
        }
        mysqli_stmt_close($stmt);
    }
} else {
    // 3. INCLUDE HEADER FOR ERROR PAGE
    $current_page = 'Apply Error';
    include '../include/header.inc';
    
    echo "<main id='main-content'>";
    echo "<h1>Form Submission Failed</h1>";
    echo "<p>Please correct the following server-side validation issues:</p>";
    echo "<ul style='color: red;'>";
    foreach ($errors as $error) {
        echo "<li>" . $error . "</li>";
    }
    echo "</ul>";
    echo "<p><a href='index.php'>Go back and try again</a></p>";
    echo "</main>";
    
    // 4. INCLUDE FOOTER FOR ERROR PAGE
    include '../include/footer.inc';
}

// Terminate database resource connection cleanly
mysqli_close($conn);
?>
