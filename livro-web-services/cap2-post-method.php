<form action="" method="post">
    Email: <input type="text" name="email" />
    <br />
    NickName: <input type="text" name="nickname" />
    <br />
    <input type="submit" value="Register" />
</form>
<?php
if (isset($_POST)) {
    require_once 'cap2-get-form-page.php';
}
?>