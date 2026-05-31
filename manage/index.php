<?php
$current_page = 'Manage';
include '../include/header.inc';
?>

<main>
    <?php
    session_start();
    if (isset($_SESSION['user'])) {
        echo "Welcome, " .$_SESSION['user'];
        echo "<br><br>";
        include 'manage.inc';
        require_once "../settings.php";

        echo "<br>";
        session_start();
        $conn = mysqli_connect($host,$user,$pwd,$sql_db);

        $sql = "DESCRIBE `eoi`";
        $eoi_exists = mysqli_query($conn, $sql);
        if ($eoi_exists) {
            switch ($_POST['command']) {
                case "EOI_all" :
                    # Get all Expressions Of Interest
                    $sql = "SELECT * FROM `eoi` WHERE 1";
                    $result = mysqli_query($conn, $sql);
                break;
                case "EOI_reference" :
                    # Get Expressions Of Interest with given job reference
                    $search = mysqli_real_escape_string($conn, $_POST['search_reference']);
                    $stmt = $conn->prepare("SELECT * FROM `eoi` WHERE `job_ref_num` LIKE ?");
                    $stmt->bind_param("s", $search);
                    $stmt->execute();
                    $result = $stmt->get_result();
                break;
                case "EOI_firstname" :
                    # Get Expressions Of Interest with given first/last name
                    if (isset($conn, $_POST['search_firstname'])) {
                        $search_firstname = mysqli_real_escape_string($conn, $_POST['search_firstname']);
                    } else {
                        $search_firstname = "";
                    }
                    if (isset($conn, $_POST['search_lastname'])) {
                        $search_lastname = mysqli_real_escape_string($conn, $_POST['search_lastname']);
                    } else {
                        $search_lastname = "";
                    }
                    $stmt = $conn->prepare("SELECT * FROM `eoi` WHERE `first_name` LIKE ? OR `last_name` LIKE ?");
                    $stmt->bind_param("ss", $search_firstname, $search_lastname);
                    $stmt->execute();
                    $result = $stmt->get_result();
                break;
                case "EOI_deletebyref" :
                    # Delete Expressions Of Interest with given job reference
                    $delete = mysqli_real_escape_string($conn, $_POST['delete_reference']);
                    $stmt = $conn->prepare("DELETE FROM `eoi` WHERE `job_ref_num` LIKE ?");
                    $stmt->bind_param("s", $delete);
                    $stmt->execute();
                    $sql = "SELECT * FROM `eoi` WHERE 1";
                    $result = mysqli_query($conn, $sql);
                break;
                case "EOI_sortby" :
                    # Get all expressions of interest, sorted by given category
                    echo $_POST['sort_id'];
                    $sort = mysqli_real_escape_string($conn, $_POST['sort_id']);
                    $stmt = $conn->prepare("SELECT * FROM `eoi` ORDER BY " . $sort . " ASC");
                    #$stmt->bind_param("s", $sort);
                    $stmt->execute();
                    $result = $stmt->get_result();
                break;
            }

            # Print SQL result into HTML table
            if ($_POST['command'] == "") {
                $sql = "SELECT * FROM `eoi` WHERE 1";
                $result = mysqli_query($conn, $sql);
            }
            if (mysqli_num_rows($result) > 0) {
                echo "<table border='1' cellpadding='5'>";
                echo "<tr>
                <th>ID</th>
                <th>Job Reference</th>
                <th>First Name</th>
                <th>Last Name</th>
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

                    if (isset($_POST['eoi_' . $row['eoi_id'] . '_status'])) {
                        echo "A";
                        $new_status = mysqli_real_escape_string($conn, $_POST['eoi_' . $row['eoi_id'] . '_status']);
                        $stmt = $conn->prepare("UPDATE `eoi` SET `status`=? WHERE `eoi_id` = ?");
                        $stmt->bind_param("ss", $new_status, $row['eoi_id']);
                        $stmt->execute();
                        $row['status'] = $new_status;
                    }

                    echo "<tr>";
                    echo "<td>" . $row['eoi_id'] . "</td>";
                    echo "<td>" . $row['job_ref_num'] . "</td>";
                    echo "<td>" . $row['first_name'] . "</td>";
                    echo "<td>" . $row['last_name'] . "</td>";
                    echo "<td>" . $row['date_of_birth'] . "</td>";
                    echo "<td>" . $row['gender'] . "</td>";
                    echo "<td>" . $row['street_address'] . "</td>";
                    echo "<td>" . $row['suburb'] . "</td>";
                    echo "<td>" . $row['postcode'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['phone_number'] . "</td>";
                    echo "<td>" . $row['skills'] . "</td>";
                    echo "<td>" . $row['other_skills'] . "</td>";
                    echo "
                    <td>
                        <details>
                            <summary>" . $row['status'] . "</summary>
                            <form action='.' method='post'>
                                <button type='submit'
                                        name='eoi_" . $row['eoi_id'] . "_status' value='New'
                                        style='width:100%;'>
                                   New
                                </button>
                                <button type='submit'
                                        name='eoi_" . $row['eoi_id'] . "_status' value='Current'
                                        style='width:100%;'>
                                   Current
                                </button>
                                <button type='submit'
                                        name='eoi_" . $row['eoi_id'] . "_status' value='Final'
                                        style='width:100%;'>
                                   Final
                                </button>
                            </form>
                        </details>
                    </td>
                    ";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p>No results found.</p>";
            }
            echo '
            <br>
            <form action="logout.php" method="post">
                <div id="form_listall">
                    <button type="submit">
                        Sign Out
                    </button>
                </div>
            </form>
            ';

        } else {
            echo "<p>No results found.</p>";
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
