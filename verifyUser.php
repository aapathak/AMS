<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$emailID = mysqli_real_escape_string($connection,$_POST['EmailID']);
	$password = mysqli_real_escape_string($connection,$_POST['PasswordInput']);

  	$result = "SELECT * FROM userdetails WHERE emailID='".$emailID."' ";
  	$result = mysqli_query($connection,$result);
  	$row  = mysqli_fetch_array($result);
    if ($row['emailID'] == '') {
      echo "No User Found";
    }
  	if(is_array($row)){
  		if($password==$row['password']){
			$_SESSION["userID"] = $row['userID'];
            $_SESSION["fname"] = $row['fname'];
            $_SESSION["emailID"] = $row['emailID'];
            $_SESSION["lname"] = $row['lname'];
            $_SESSION["mobileNo"] = $row['mobileNo'];
            $_SESSION['password'] = $row['password'];
            $_SESSION["dob"] = $row['dob'];
            $_SESSION["House1"] = $row['House1'];
            $_SESSION["House2"] = $row['House2'];
            $_SESSION["House3"] = $row['House3'];
            $_SESSION["House4"] = $row['House4'];
            $_SESSION["House5"] = $row['House5'];
            $_SESSION["House6"] = $row['House6'];
            $_SESSION["jeeroll"] = $row['jeeroll'];
            $_SESSION["jeescore"] = $row['jeescore'];
            
            if($_SESSION['password']=="admin123"){
                header("Location:admin.php");
            }
            else{
	           header("Location:dashboard.php");
            }
  		}
        else{
            $_SESSION['msg'] = "wrong password ";
            echo "wrong password";

        }
  	}
  }
?>