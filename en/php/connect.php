<?php
error_reporting(E_ERROR);
$connect = mysqli_connect('localhost', 'root', 'root', 'projectsdb');


if (!$connect)
{
    die ('ბაზასთან კავშირის შეცდომა');
}

?>
