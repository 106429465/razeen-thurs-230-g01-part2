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
        <form action="validate_login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" name="username" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" required><br>

            <input type="hidden" name="token" value="abc123">
            <input type="submit" value="Login">
        </form>
    </main>
</body>
</hml>
