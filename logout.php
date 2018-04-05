<?php
	session_start();
	include 'config.php';
	unset($_SESSION["fname"]);
	unset($_SESSION["lname"]);
	unset($_SESSION["userID"]);
	unset($_SESSION["emailID"]);
	unset($_SESSION["mobileNo"]);
	unset($_SESSION["dob"]);
	unset($_SESSION['House1']);unset($_SESSION['House4']);
	unset($_SESSION['House2']);unset($_SESSION['House5']);
	unset($_SESSION['House3']);unset($_SESSION['House6']);
	unset($_SESSION['SchoolName1']);unset($_SESSION['SchoolName']);
	unset($_SESSION['marks12']);unset($_SESSION['marks10']);
	unset($_SESSION['year12']);unset($_SESSION['year10']);
	session_destroy();
	header("Location:index.php");
?>
