<?php
session_start();
require ('connection.php');

$pw = $_SESSION['password'];
$passworddefault = "45eebdb9b09c534c02f5679f67ef92c8";

if ($pw == $passworddefault)
{ 
    echo '<script language="javascript">';
    echo 'window.location.href="../staff/staffpw.php";';
    echo '</script>';
} else
{
    echo '<script language="javascript">';
    echo 'window.location.href="../staff/printinglist.php";';
    echo '</script>';
}

?>