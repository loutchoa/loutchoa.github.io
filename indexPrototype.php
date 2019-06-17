<?php

   session_start();
   $_SESSION['rel_path'] = "NewDiku_files/";	
   include($_SESSION['rel_path'] . "head.php" );

   include( "index.html" );

   include( $_SESSION['rel_path'] . "tail.php" );
?>
