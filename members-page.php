<?php                                                                       
session_start();
if (!isset($_SESSION['userid']) or ($_SESSION['userid'] != 27))
{ header("Location: login.php");
  exit();
}
?>
