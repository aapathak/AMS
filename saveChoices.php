<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){

	$userID = $_SESSION["userID"];
	$choice1 = test_input($_POST["choice1"]);
	$choice2 = test_input($_POST["choice2"]);	
    $choice3 = test_input($_POST["choice3"]);
    $choice4 = test_input($_POST["choice4"]);


    $check = "SELECT * from `userchoices` where userID='".$userID."' ";
    $result = mysqli_query($connection,$check);
  	$row  = mysqli_fetch_array($result);
    if ($row['choiceA'] != '' && $row['choiceB'] != '' && $row['choiceC'] != '' && $row['choiceD'] != '' ) {
      echo "Choice Already Filled";
			?>
			<style type="text/css ">
			.choiceFilled
			{
				display:block;
			}
			#choiceFilling
			{
				display: none;
			}
			</style>
		<?php
			
      header("Location:dashboard.php");
    }
    else {

     $sql="INSERT INTO `userchoices` (`userID`,`choiceA`, `choiceB`,`choiceC`,`choiceD`) values ('".$userID."', '".$choice1."', '".$choice2."', '".$choice3."','".$choice4."')";

     if (mysqli_query($connection, $sql)){
              echo "hogaya kam user";
              header("Location:dashboard.php");
            }
            else{
              echo "ghus gyaa";
            }
        }
    }
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>