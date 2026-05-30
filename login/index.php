
<?php
$current_page = 'Manage';
include '../include/header.inc';
?>

<form action="validate_login.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <input type="hidden" name="token" value="abc123">
    <input type="submit" value="Login">
</form>

<?php
include '../include/footer.inc';
?>
