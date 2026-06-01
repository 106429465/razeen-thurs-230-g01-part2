
<?php
$current_page = 'Manage';
include '../include/header.inc';
// Capture the theme from the URL if it exists
$theme = isset($_GET['theme']) ? $_GET['theme'] : 'light'; 
$form_action = "validate_login.php?theme=$theme#$theme";
?>

<h1>HR Login Portal</h1>

  <form action="<?php echo $form_action; ?>" method="post">
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
