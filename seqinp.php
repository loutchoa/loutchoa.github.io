<?php
session_start();
$_SESSION['rel_path'] = "../ImageGroup/";
include($_SESSION['rel_path'] . "head.php" );
?>

<?php include( "seqinp/index.html" );?>

<?php include( $_SESSION['rel_path'] . "tail.php" );?>
