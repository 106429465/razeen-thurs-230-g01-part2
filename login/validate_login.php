
<?php
$current_page = 'Login';
include '../include/header.inc';
?>

<main>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once "../settings.php";

        session_start();
        $conn = mysqli_connect($host,$user,$pwd,$sql_db);

        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $stmt = $conn->prepare("SELECT `password` FROM `hr_users` WHERE `username` = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = mysqli_fetch_assoc($stmt->get_result());

        if ($username == 'admin' && password_verify($password, $result['password'])) {
            echo "<p>Login successful, redirecting...</p>";
            $_SESSION['user'] = $username;
            header('Location: ../manage');
        } else {
            echo "Invalid Login. <a href='login.php'>Try again</a>";
        }
    } else {
        header('Location: login.php');
    }
    ?>
</main>

<?php
include '../include/footer.inc';
?>
