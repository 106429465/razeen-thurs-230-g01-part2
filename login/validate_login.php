
<?php
$current_page = 'Login';
include '../include/header.inc';
?>

<main>
    <?php
    // Function taken from /apply/process_eoi.php
    function sanitise_input($data)
    {
        $data = trim($data); // Remove accidental leading/trailing spaces
        $data = stripslashes($data); // Remove backslashes from input string
        $data = htmlspecialchars($data); // Convert special characters to HTML entities (Prevents XSS)
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once "../settings.php";

        session_start();
        $conn = mysqli_connect($host,$user,$pwd,$sql_db);

        # Clean PHP request
        $username = sanitise_input(mysqli_real_escape_string($conn, $_POST['username']));
        $password = sanitise_input(mysqli_real_escape_string($conn, $_POST['password']));

        # Find password from row of specified user
        $stmt = $conn->prepare("SELECT `password` FROM `hr_users` WHERE `username` = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = mysqli_fetch_assoc($stmt->get_result());

        # Validate password against hash
        if ($username == 'admin' && password_verify($password, $result['password'])) {
            echo "<p>Login successful, redirecting...</p>";
            # Start session and open manage page
            $_SESSION['user'] = $username;
            header('Location: ../manage');
        } else {
            echo "Invalid Login. <a href='../login#dark' class='link-dark'>Try again</a><a href='../login#light' class='link-light'>Try again</a>";
        }
    } else {
        header('Location: login.php');
    }
    ?>
</main>

<?php
include '../include/footer.inc';
?>
