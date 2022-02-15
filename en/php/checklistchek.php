<?php
error_reporting(E_ERROR);
ob_start();

$userkookie = $_COOKIE['arqi_userr'];


$project = $_POST['project'];
$floor = $_POST['floor'];
$place = $_POST['place'];

date_default_timezone_set('Asia/Tbilisi');
$timme = date ("d-m-y H:i:s");



$mysql = new mysqli('localhost', 'root', 'root', 'projectsdb');
$result = $mysql->query("SELECT * FROM `arqi_checklists` WHERE `project` = '$project'");
$userr = $result->fetch_assoc();

$sql = "SELECT * FROM arqi_users WHERE user LIKE '$userkookie'";
    $result = $mysql->query($sql);
$row = $result->fetch_object();
$user = $row->name;


$first = $_POST['first'];
$commfirst = $_POST['commfirst'];
$second = $_POST['second'];
$commsecond = $_POST['commsecond'];
$third = $_POST['third'];
$commthird = $_POST['commthird'];
$fourth = $_POST['fourth'];
$commfourth = $_POST['commfourth'];
$fifth = $_POST['fifth'];
$commfifth = $_POST['commfifth'];

$sixth = $_POST['sixth'];
$commsixth = $_POST['commsixth'];
$seventh = $_POST['seventh'];
$commseventh = $_POST['commseventh'];
$eighth = $_POST['eighth'];
$commeighth = $_POST['commeighth'];
$ninth = $_POST['ninth'];
$commninth = $_POST['commninth'];
$tenth = $_POST['tenth'];
$commtenth = $_POST['commtenth'];

$eleventh = $_POST['eleventh'];
$commeleventh = $_POST['commeleventh'];
$twelfth = $_POST['twelfth'];
$commtwelfth = $_POST['commtwelfth'];
$thirteenth = $_POST['thirteenth'];
$commthirteenth = $_POST['commthirteenth'];
$fourteenth = $_POST['fourteenth'];
$commfourteenth = $_POST['commfourteenth'];
$fifteenth = $_POST['fifteenth'];
$commfifteenth = $_POST['commfifteenth'];

$sixteenth = $_POST['sixteenth'];
$commsixteenth = $_POST['commsixteenth'];
$seventeenth = $_POST['seventeenth'];
$commseventeenth = $_POST['commseventeenth'];
$eighteenth = $_POST['eighteenth'];
$commeighteenth = $_POST['commeighteenth'];
$nineteenth = $_POST['nineteenth'];
$commnineteenth = $_POST['commnineteenth'];
$twentieth = $_POST['twentieth'];
$commtwentieth = $_POST['commtwentieth'];

$twentyfirst = $_POST['twentyfirst'];
$commtwentyfirst = $_POST['commtwentyfirst'];
$twentysecond = $_POST['twentysecond'];
$commtwentysecond = $_POST['commtwentysecond'];
$twentythird = $_POST['twentythird'];
$commtwentythird = $_POST['commtwentythird'];
$twentyfourth = $_POST['twentyfourth'];
$commtwentyfourth = $_POST['commtwentyfourth'];

$comment = $_POST['comment'];

//if(!empty($_FILES['userimg']['tmp_name']))
//$userimg = addslashes(file_get_contents($_FILES['userimg']['tmp_name']));


if(!$userr || count($userr) ==0)
{
$mysql->query("INSERT INTO `arqi_checklists`
(`project`,
`floor`,
`place`,
`timme`,
`user`,
`first`,
`second`,
`third`,
`fourth`,
`fifth`,
`sixth`,
`seventh`,
`eighth`,
`ninth`,
`tenth`,
`eleventh`,
`twelfth`,
`thirteenth`,
`fourteenth`,
`fifteenth`,
`sixteenth`,
`seventeenth`,
`eighteenth`,
`nineteenth`,
`twentieth`,
`twentyfirst`,
`twentysecond`,
`twentythird`,
`twentyfourth`,
`commfirst`,
`commsecond`,
`commthird`,
`commfourth`,
`commfifth`,
`commsixth`,
`commseventh`,
`commeighth`,
`commninth`,
`commtenth`,
`commeleventh`,
`commtwelfth`,
`commthirteenth`,
`commfourteenth`,
`commfifteenth`,
`commsixteenth`,
`commseventeenth`,
`commeighteenth`,
`commnineteenth`,
`commtwentieth`,
`commtwentyfirst`,
`commtwentysecond`,
`commtwentythird`,
`commtwentyfourth`,
`comment`)
VALUES
('$project',
'$floor',
'$place',
'$timme',
'$user',
'$first',
'$second',
'$third',
'$fourth',
'$fifth',
'$sixth',
'$seventh',
'$eighth',
'$ninth',
'$tenth',
'$eleventh',
'$twelfth',
'$thirteenth',
'$fourteenth',
'$fifteenth',
'$sixteenth',
'$seventeenth',
'$eighteenth',
'$nineteenth',
'$twentieth',
'$twentyfirst',
'$twentysecond',
'$twentythird',
'$twentyfourth',
'$commfirst',
'$commsecond',
'$commthird',
'$commfourth',
'$commfifth',
'$commsixth',
'$commseventh',
'$commeighth',
'$commninth',
'$commtenth',
'$commeleventh',
'$commtwelfth',
'$commthirteenth',
'$commfourteenth',
'$commfifteenth',
'$commsixteenth',
'$commseventeenth',
'$commeighteenth',
'$commnineteenth',
'$commtwentieth',
'$commtwentyfirst',
'$commtwentysecond',
'$commtwentythird',
'$commtwentyfourth',
'$comment')");
$mysql->close();
    ob_end_clean();
header('Location: ../php/messages/checklistregconfirm.php');
    exit();
    }
else{
   header('Location: ../php/messages/error7.php');
}

?>



