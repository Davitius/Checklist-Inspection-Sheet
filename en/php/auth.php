<?php
error_reporting(E_ERROR);
if (session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
    session_start();
}

$user = filter_var(trim($_POST['user']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);

$pass = md5($pass."hgffggdgdsf54");


$mysql = new mysqli('localhost', 'root', 'root', 'projectsdb');
$result = $mysql->query("SELECT * FROM `arqi_users` WHERE `user` = '$user'
AND `pass` = '$pass'");
$userr = $result->fetch_assoc();



if($userr !==0)
{
    setcookie('arqi_userr', $userr['user'], time() + 3600*10, "/");
    header('Location: ../index.php');
}
if($userr ==0)
{
    header('Location: messages/error4.php');
}
$mysql->close();
?>
