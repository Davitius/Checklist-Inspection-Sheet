<?php
error_reporting(E_ERROR);
$user = filter_var(trim($_POST['user']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);

if(mb_strlen($user) < 5 || mb_strlen($user) > 30)
{
    //echo "მომხმარებლის სახელი არ შეესაბამება მოთხოვნებს.";
    header('Location: ../php/messages/error2.php');
    exit();
}
else if(mb_strlen($pass) < 5 || mb_strlen($pass) > 12)
{
    //echo "პაროლი არ შეესაბამება მოთხოვნებს.";
    header('Location: ../php/messages/error3.php');
    exit();
}

$pass = md5($pass."hgffggdgdsf54");
$mysql = new mysqli('localhost', 'root', 'root', 'projectsdb');
$result = $mysql->query("SELECT * FROM `arqi_users` WHERE `user` = '$user'");
$userr = $result->fetch_assoc();

$name = $_POST['name'];
$access = $_POST['access'];
$position = $_POST['position'];
$phone = $_POST['phone'];

if(!empty($_FILES['userimg']['tmp_name']))
$userimg = addslashes(file_get_contents($_FILES['userimg']['tmp_name']));


if(!$userr || count($userr) ==0)
{
$mysql->query("INSERT INTO `arqi_users`
(`user`,
`pass`,
`access`,
`name`,
`position`,
`userimg`)
VALUES
('$user',
'$pass',
'$access',
'$name',
'$position',
'$userimg')");
$mysql->close();
header('Location: ../php/messages/userregconfirm.php');
    }
else{
   header('Location: ../php/messages/error5.php');
}

?>



