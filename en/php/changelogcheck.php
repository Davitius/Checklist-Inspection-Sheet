<?php
error_reporting(E_ERROR);



$mysql = new mysqli('localhost', 'root', 'root', 'projectsdb');
$result = $mysql->query("SELECT * FROM `arqi_changelog` WHERE `changes` = '$changes'");
$userr = $result->fetch_assoc();


date_default_timezone_set('Asia/Tbilisi');
$timme = date ("d-m-y");
$changes = $_POST['changes'];
$news = $_POST['news'];



$mysql->query("INSERT INTO `arqi_changelog`
(`timme`,
`changes`,
`news`)
VALUES
('$timme',
'$changes',
'$news')");
$mysql->close();
header('Location: ../php/messages/changelogaddconfirm.php');



?>



