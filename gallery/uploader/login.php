<?php
/**
 * Login page for administrator menu
 *
 * @version 0.1
 * @authro konoiz <izumi@konome.org>
 */
require_once 'function.inc.php';
if (requireLogin() === true) {
    redirect('admin.php');
}

if (isset($_POST['key']) && $_POST['key'] == ADMIN_KEYWORD) {
    $_SESSION['isValid'] = true;
    redirect('admin.php');
}
?>

<form action="login.php" method="post">
    <input type="text" name="key" id="key" size="15" />
    <input type="submit" />
</form>
