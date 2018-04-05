<?php


	$butID = $_POST['Proceed'];
	$sql1 = "SELECT * FROM `userchoices` where userID='".$butID."' ";
	$sql2 = "SELECT * FROM `userdetails` where userID='".$butID."' ";
	
	$res = mysqli_query($connection,$sql1);
	$r1  = mysqli_fetch_array($res);

	$res1 = mysqli_query($connection,$sql2);
	$r2  = mysqli_fetch_array($res1);

	$fname = $r2['fname'];
	$lname = $r2['lname'];
	$score = $r2['jeescore'];
	$num = mysqli_num_rows($res);
	echo $num;

?>