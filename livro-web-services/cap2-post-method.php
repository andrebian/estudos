<form action="" method="post">
    Email: <input type="text" name="email" />
    <br />
    NickName: <input type="text" name="nickname" />
    <br />
    <input type="submit" value="Register" />
</form>
<?php
if (isset($_POST)) {
    require_once 'cap2-form-page.php';
}
?>

<?php

// Another Way

$url = 'http://localhost/estudos/livro-web-services/cap2-form-page.php';
$data = array('email' => 'andrecardosodev@gmail.com', 'nickname' => 'andrebian');

$options = array(
    'http' => array(
        'method' => 'POST',
        'header' => 'Content-Type: application/x-www-form-urlencoded',
        'content' => http_build_query($data)
    )
);

$page = file_get_contents($url, false, stream_context_create($options));
echo $page;
