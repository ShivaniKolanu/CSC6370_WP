
<!--
Coded by: Anuska Sinha
Last updated: 7:27PM
-->
<?php session_start(); /* Starts the session */

session_destroy(); /* Destroy started session */
header("location:login.php");
exit;
?>
