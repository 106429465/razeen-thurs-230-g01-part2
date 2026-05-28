
<?php
$current_page = 'Login';
include '../include/header.inc';
?>

<main>
    <?php
    session_start();
    if (isset($_SESSION['user'])) {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        echo "Welcome, " .$_SESSION['user'];
        include 'manage.inc';
        require_once "../settings.php";

        echo "<br>";
        echo $_POST['command'];
        echo "<br>";

        session_start();
        $conn = mysqli_connect($host,$user,$pwd,$sql_db);

        switch ($_POST['command']) {
            case "EOI_all" :
                # Get all Expressions Of Interest
                $sql = "SELECT * FROM `eoi` WHERE 1";
                $result = mysqli_query($conn, $sql);
            break;
            case "EOI_reference" :
                # Get Expressions Of Interest with given job reference
                $search = mysqli_real_escape_string($conn, $_POST['search_reference']);
                $stmt = $conn->prepare("SELECT * FROM `eoi` WHERE `eoi_id` = ?");
                $stmt->bind_param("s", $search);
                $stmt->execute();
                $result = $stmt->get_result();
            break;
            case "EOI_firstname" :
                # Get Expressions Of Interest with given first/last name
                $search = mysqli_real_escape_string($conn, $_POST['search_reference']);
                $stmt = $conn->prepare("SELECT * FROM `eoi` WHERE `eoi_id` = ?");
                $stmt->bind_param("s", $search);
                $stmt->execute();
                $result = $stmt->get_result();
            break;
            case "EOI_deletebyref" :
                # Delete Expressions Of Interest with given job reference
                $delete = mysqli_real_escape_string($conn, $_POST['delete_reference']);
                $stmt = $conn->prepare("DELETE FROM `eoi` WHERE `eoi_id` = ?");
                $stmt->bind_param("s", $delete);
                $stmt->execute();
                $sql = "SELECT * FROM `eoi` WHERE 1";
                $result = mysqli_query($conn, $sql);
            break;
            case "EOI_sortby" :
                # Get all expressions of interest, sorted by given category
                $sort = mysqli_real_escape_string($conn, $_POST['sort_id']);
                $stmt = $conn->prepare("SELECT * FROM `eoi` ORDER BY ? ASC");
                $stmt->bind_param("s", $sort);
                $stmt->execute();
                $result = $stmt->get_result();
            break;
        }

        # Print SQL result into HTML table
        if ($_POST['command'] == "") {
            echo "<p>Please select an option above</p>";
        } else {
            if (mysqli_num_rows($result) > 0) {
                echo "<table border='1' cellpadding='5'>";
                echo "<tr>
                <th>ID</th>
                <th>Job Reference</th>
                <th>Surname</th>
                <th>Given Name</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Street Address</th>
                <th>Suburb</th>
                <th>Postcode</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Skills</th>
                <th>Other Skills</th>
                <th>Status</th>
                </tr>";

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['eoi_id'] . "</td>";
                    echo "<td>" . $row['job_ref_num'] . "</td>";
                    echo "<td>" . $row['last_name'] . "</td>";
                    echo "<td>" . $row['first_name'] . "</td>";
                    echo "<td>" . $row['date_of_birth'] . "</td>";
                    echo "<td>" . $row['gender'] . "</td>";
                    echo "<td>" . $row['street_address'] . "</td>";
                    echo "<td>" . $row['suburb'] . "</td>";
                    echo "<td>" . $row['postcode'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['phone_number'] . "</td>";
                    echo "<td>" . $row['skills'] . "</td>";
                    echo "<td>" . $row['other_skills'] . "</td>";
                    echo "<td>" . $row['status'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p>No results found.</p>";
            }
        }
    } else {
        # Redirect user to login page if no valid session is found
        header('Location:../login');
    }
    ?>
</main>

<?php
include '../include/footer.inc';
?>
