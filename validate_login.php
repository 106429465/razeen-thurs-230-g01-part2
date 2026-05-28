<!DOCTYPE html>
<html lang="en-au">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Description">
  <meta name="keywords" content="Keywords">
  <meta name="author" content="Marley Brown">

  <meta property="og:title" content="HealThML">
  <meta property="og:description"
    content="HealThML is the custom HTML and CSS project designed by Tyler Stokes, Zain Khan, Jack Bailey, and Marley Brown">
  <meta property="og:image" content="/images/logo_full.png">
  <meta property="og:image:width" content="639">
  <meta property="og:image:height" content="222">
  <meta property="og:type" content="website">

  <title>Login - HealThML</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
  <link rel="stylesheet" type="text/css" href="styles/style.css">
  <link rel="stylesheet" type="text/css" href="styles/index_style.css">
</head>

<body>
    <header>
        <?php
        include 'header.inc';
        ?>
    </header>
    <main>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require_once "settings.php";

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
                header('Location: manage.php');
            } else {
                echo "Invalid Login. <a href='login.php'>Try again</a>";
            }
        } else {
            header('Location: login.php');
        }
        ?>
    </main>
</body>
</html>
