<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
    	$fname = test_input($_POST["fname"]);	
    	$lname = test_input($_POST["lname"]);
    	$emailID = test_input($_POST["emailID"]);
      $dob = test_input($_POST["dob"]);
      $password = test_input($_POST["password"]);
      $passwordc = test_input($_POST["passwordc"]);
      $mobileNo = test_input($_POST["mobileNo"]);
      $House1 = test_input($_POST["House1"]);
      $House2 = test_input($_POST["House2"]);
      $House3 = test_input($_POST["House3"]);
      $House4 = test_input($_POST["House4"]);
      $House5 = test_input($_POST["House5"]);
      $House6 = test_input($_POST["House6"]);
      $SchoolName = test_input($_POST["SchoolName"]);
      $year10 = test_input($_POST["year10"]);
      $marks10 = test_input($_POST["marks10"]);
      $SchoolName1 = test_input($_POST["SchoolName1"]);
      $year12 = test_input($_POST["year12"]);
      $marks12 = test_input($_POST["marks12"]);
      $jeeroll = test_input($_POST["jeeroll"]);
      $jeescore = test_input($_POST["jeescore"]);

    			
            if(!empty($_POST['password']) && ($_POST['passwordc']==$_POST['password'])){

            $sql = "INSERT INTO `userdetails` (`fname`,`lname`,`dob`, `emailID`,`password`,`passwordc`,`mobileNo`,`House1`,`House2`,`House3`,`House4`,`House5`,`House6`,`SchoolName`,`year10`,`marks10`,`SchoolName1`,`year12`,`marks12`,`jeeroll`,`jeescore`) 
            values
             ('".$fname."', '".$lname."', '".$dob."', '".$emailID."','".$password."','".$passwordc."','".$mobileNo."','".$House1."','".$House2."','".$House3."','".$House4."','".$House5."','".$House6."','".$SchoolName."','".$year10."','".$marks10."','".$SchoolName1."','".$year12."','".$marks12."','".$jeeroll."','".$jeescore."') ";
            
             
             $que = "INSERT INTO `userdetails` values ('".$fname."','".$lname."','".$dob."','".$emailID."','".$password."','".$passwordc."','".$mobileNo."','".$House1."','".$House2."','".$House3."','".$House4."','".$House5."','".$House6."','".$SchoolName."','".$year10."','".$marks10."','".$SchoolName1."','".$year12."','".$marks12."','".$jeeroll."','".$jeescore."')";


            if (mysqli_query($connection,$sql)){
              echo "hogaya kam user";
              header("Location:index.php");
            }
            else{
              if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }
              if (!mysqli_query($connection,$sql))
              {
              echo("Error description: " . mysqli_error($connection));
              }

              echo "Error Occurred";
            }
            }
            else
            {
              echo "password not match";
            }
          }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
