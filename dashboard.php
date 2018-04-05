
<?php
	session_start();
	/*this code is for all categories div*/
    	include 'config.php';

    	$fname=$_SESSION['fname'];
    	$lname = $_SESSION['lname'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Institute of Engineering and Technology</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Droid+Sans|Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
</head>
<body>	
	<div class="container-fluid">
		<div class="row navBar">
			<div class="row imgBarTop col-sm-5">
				<div class="col-sm-3">
					<a href="index.php">
						<img src="images/logo.png">
					</a>
				</div>
				<div class="col-sm-9">
					<a href="index.php">
						<h3>Institute Of Engineering And Technology, Lucknow</h3>
					</a>
				</div>
			</div>
			<div class="col-sm-2"></div>
			<div class="col-sm-5 loginMenu">
				<div class=" loginBarA">
					<h4>Welcome, <?php echo $fname; ?> </h4>
				</div>
				<div class="row loginBarB">
					<div class="colsm6">
						<h5 id="notID">Not You?</h5>
						<h5 id="logoutID">
								<form action="logout.php" method="post">
									<input type="submit" value="Logout" class="logoutButton">
								</form>
						</h5>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<h2>Dashboard </h2>
		</div>
			<div id="exTab3" class="container">	
			<ul  class="nav nav-pills">
						<li class="active">
			        <a  href="#1b" data-toggle="tab">Account Details</a>
						</li>
						<li><a href="#2b" data-toggle="tab">Cut-Off Criteria</a>
						</li>
						<li><a href="#3b" data-toggle="tab">Counselling Procedure</a>
						</li>
						<li><a href="#4b" data-toggle="tab">Counselling Result</a>
						</li>
			  		<li><a href="#5b" data-toggle="tab">Allotment Details</a>
						</li>
					</ul>

						<div class="tab-content clearfix">
						  <div class="tab-pane active" id="1b">
			          			<div class="userBody row">
			          				<div class="userL col-sm-6">
			          					<div class="LHead">
			          						<h4>About You</h4>
			          					</div>
			          					<div class="LBody row">
			          						<div class="col-sm-6">
			          							<label>JEE Roll Number</label>
			          						</div>
			          						<div class="col-sm-6">
			          							<label><?php echo $_SESSION['jeeroll'];?></label>
			          						</div>
			          						<div class="col-sm-6">
			          							<label>JEE Score </label>
			          						</div>
			          						<div class="col-sm-6">
			          							<label><?php echo $_SESSION['jeescore'];?></label> /360
			          						</div>
			          						<div class="col-sm-6">
			          							<label>Name </label>
			          						</div>
			          						<div class="col-sm-6">
			          							<label><?php echo ($_SESSION['fname']." ".$_SESSION['lname']);?></label>
			          						</div>
			          						<div class="col-sm-6">
			          							<label>Date Of Birth </label>
			          						</div>
			          						<div class="col-sm-6">
			          							<label><?php echo $_SESSION['dob'];?></label>
			          						</div>
			          						<div class="col-sm-6">
			          							<label>Reg Email-ID </label>
			          						</div>
			          						<div class="col-sm-6">
			          							<label><?php echo $_SESSION['emailID'];?> </label>
			          						</div>
			          						<div class="col-sm-6">
			          							<label>Contact Number </label>
			          						</div>
			          						<div class="col-sm-6">
			          							<label><?php echo $_SESSION['mobileNo'];?></label>
			          						</div>
			          					</div>
			          				</div>
			          				<div class="userR col-sm-6">
			          					<div class="RHead">
			          						<h4>Address</h4>
			          					</div>
			          					<div class="LBody row">
			          						<div class="col-sm-6">
			          							<label>House/ Street No.</label>
			          						</div>
			          						<div class="col-sm-6">
			          							<label><?php echo $_SESSION['House1'];?></label>
			          						</div>
			          						<div class="col-sm-6">
			          							<label>Locality</label>
			          						</div>
			          						<div class="col-sm-6">
			          							<label><?php echo $_SESSION['House2'];?> </label>
			          						</div>
			          						<div class="col-sm-6">
			          							<label>Landmark</label>
			          						</div>
			          						<div class="col-sm-6">
			          							<label><?php echo $_SESSION['House3'];?></label>
			          						</div>
			          						<div class="col-sm-6">
			          							<label>State </label>
			          						</div>
			          						<div class="col-sm-6">
			          							<label><?php echo $_SESSION['House4'];?></label>
			          						</div>
			          						<div class="col-sm-6">
			          							<label>City </label>
			          						</div>
			          						<div class="col-sm-6">
			          							<label><?php echo $_SESSION['House5'];?></label>
			          						</div>
			          						<div class="col-sm-6">
			          							<label>Pincode</label>
			          						</div>
			          						<div class="col-sm-6">
			          							<label><?php echo $_SESSION['House6'];?></label>
			          						</div>
			          					</div>
			          				</div>
			          			</div>
			          			<hr>
			          			<div class="row rulesAndReg">
			          				<div class="ruleHead col-sm-10">
			          					<h5>Please read the <strong>Rules</strong> before proceeding to the Counselling Procedure :</h5>
			          				</div>
			          				<div class="col-sm-10">
			          					<ul>
			          						<li>Choice Filling is compulsory for allotment of seat. Candidate will not be considered otherwise.</li>
			          						<li>Once the period of choice filling is over, choice filled  bu candidate will be used for allotment of seat. </li>
			          						<li>Candidate should fill as many choices as possible to ensure that they have better chances of allotment of seat.</li>
			          						<li>After choice filling is over, the choices made by student cannot be changed.</li>
			          						<li>The seat will be alloted to the student based on merit score. JEE Mains Score will be taken into consideration.</li>
			          					</ul>
			          				</div>
			          			</div>
			          			<div class="row">
			          				<div class="nextButton">
			          					<button type="submit" id="nextButtonID">Next</button>
			          				</div>
			          			</div>
							</div>
							<div class="tab-pane" id="2b">
			          			<div class="row">
			          				<div class="cutHead col-sm-10">
			          					<h4>Cut-Off List :</h4>
			          					<hr>
			          				</div>
			          				<div class="col-sm-4">
			          					<label id="titleA">Branch/ Stream</label>
			          				</div>
			          				<div class="col-sm-4">
			          					<label id="titleB">JEE Score</label>
			          				</div>
			          				<div class="col-sm-4">
			          					<label id="titleC">Seats</label>
			          				</div>
			          				<div class="col-sm-4">
			          					<label>Computer Science</label>
			          				</div>
			          				<div class="col-sm-4">
			          					<label> > 325</label>
			          				</div>
			          				<div class="col-sm-4">
			          					<label>50</label>
			          				</div>
			          				<div class="col-sm-4">
			          					<label>Information Technology</label>
			          				</div>
			          				<div class="col-sm-4">
			          					<label> 300 - 325 </label>
			          				</div>
			          				<div class="col-sm-4">
			          					<label>50</label>
			          				</div>
			          				<div class="col-sm-4">
			          					<label>Electronics and Communications</label>
			          				</div>
			          				<div class="col-sm-4">
			          					<label> 290 - 325 </label>
			          				</div>
			          				<div class="col-sm-4">
			          					<label>50</label>
			          				</div>
			          				<div class="col-sm-4">
			          					<label>Electrical and Electronics</label>
			          				</div>
			          				<div class="col-sm-4">
			          					<label> 250 - 300 </label>
			          				</div>
			          				<div class="col-sm-4">
			          					<label>50</label>
			          				</div>
			          				<div class="col-sm-4">
			          					<label>Mechanical Engineering</label>
			          				</div>
			          				<div class="col-sm-4">
			          					<label> 220 - 300 </label>
			          				</div>
			          				<div class="col-sm-4">
			          					<label>50</label>
			          				</div>
			          				<div class="col-sm-4">
			          					<label>Civil Engineering</label>
			          				</div>
			          				<div class="col-sm-4">
			          					<label> 200 - 300 </label>
			          				</div>
			          				<div class="col-sm-4">
			          					<label>50</label>
			          				</div>
			          			</div>
			          			<div class="nextButton">
			          				<button type="submit" id="nextButtonID">Next</button>
			          			</div>
			          			<div class="prevButton">
			          				<button type="submit" id="prevButtonID">Previous</button>
			          			</div>
							</div>
			        		<div class="tab-pane" id="3b">
			          			<?php
			          				$id = $_SESSION['userID'];

			          				$sql = "SELECT * FROM `userchoices` where userID='".$id."' ";
			          				$result = mysqli_query($connection,$sql);
			          				$num = mysqli_num_rows($result);

			          				if($num == 0)
			          				{
			          			?>
			          				<div class="row" id="choiceFilling">
			          				<div class="counHeader col-sm-10">
			          					<h4><strong>Choice Filling</strong> (Please fill 4 choices) :</h4>
			          					<hr>
			          				</div>
			          				<form class="priorityForm" action="" method="POST">
			          					<div class="row">
			          					<div class="col-sm-6">
			          						<label>Priority 1 :</label>
			          					</div>
			          					<div class="col-sm-6">
			          						<select name="choice1">
			          							<option value="None">Nothing Selected</option>
											    <option value="Computer Science">Computer Science</option>
											    <option value="Information Technology">Information Technology</option>
											    <option value="Electronics and Communications">Electronics and Communications</option>
											    <option value="Electrical and Electronics">Electrical and Electronics</option>
											    <option value="Mechanical Engineering">Mechanical Engineering</option>
											    <option value="Civil Engineering">Civil Engineering</option>
											</select>
			          					</div>
			          					</div>
			          					<div class="row">
			          					<div class="col-sm-6">
			          						<label>Priority 2 :</label>
			          					</div>
			          					<div class="col-sm-6">
			          						<select name="choice2">
			          							<option value="None">Nothing Selected</option>
											    <option value="Computer Science">Computer Science</option>
											    <option value="Information Technology">Information Technology</option>
											    <option value="Electronics and Communications">Electronics and Communications</option>
											    <option value="Electrical and Electronics">Electrical and Electronics</option>
											    <option value="Mechanical Engineering">Mechanical Engineering</option>
											    <option value="Civil Engineering">Civil Engineering</option>
											</select>
			          					</div>
			          					</div>
			          					<div class="row">
			          					<div class="col-sm-6">
			          						<label>Priority 3 :</label>
			          					</div>
			          					<div class="col-sm-6">
			          						<select name="choice3">
											    <option value="None">Nothing Selected</option>
											    <option value="Computer Science">Computer Science</option>
											    <option value="Information Technology">Information Technology</option>
											    <option value="Electronics and Communications">Electronics and Communications</option>
											    <option value="Electrical and Electronics">Electrical and Electronics</option>
											    <option value="Mechanical Engineering">Mechanical Engineering</option>
											    <option value="Civil Engineering">Civil Engineering</option>
											</select>
			          					</div>
			          					</div>
			          					<div class="row">
			          					<div class="col-sm-6">
			          						<label>Priority 4 :</label>
			          					</div>
			          					<div class="col-sm-6">
			          						<select name="choice4">
			          							<option value="None">Nothing Selected</option>
											    <option value="Computer Science">Computer Science</option>
											    <option value="Information Technology">Information Technology</option>
											    <option value="Electronics and Communications">Electronics and Communications</option>
											    <option value="Electrical and Electronics">Electrical and Electronics</option>
											    <option value="Mechanical Engineering">Mechanical Engineering</option>
											    <option value="Civil Engineering">Civil Engineering</option>
											</select>
			          					</div>
			          					</div>

			          					<div class="buttonBody">
			          						<div class="prevButton">
			          							<button type="button" id="prevButtonID">Previous</button>
			          						</div>
			          						<div class="subButton">
			          							<button type="submit" id="subButtonID">Submit</button>
			          						</div>
			          					</div>

			          				</form>
			          			</div>
			          			<?php
			          				if ($_SERVER["REQUEST_METHOD"] == "POST"){
			          					$userID = $_SESSION["userID"];
										$choice1 = test_input($_POST["choice1"]);
										$choice2 = test_input($_POST["choice2"]);	
									    $choice3 = test_input($_POST["choice3"]);
									    $choice4 = test_input($_POST["choice4"]);
			          				
									$sql="INSERT INTO `userchoices` (`userID`,`choiceA`, `choiceB`,`choiceC`,`choiceD`) values ('".$userID."', '".$choice1."', '".$choice2."', '".$choice3."','".$choice4."')";
							    	if (mysqli_query($connection, $sql))
							    	{
									}
									else{
										echo "ghus gyaa";
										}
									}
			          				}
			          				else
			          				{
			          			?>
			          				<div class="choiceFilled" style="">
			          				<div class="row bodyC">
			          					<div class="col-sm-10">
			          						<h3>Choice Filling</h3>
			          						<hr>
			          					</div>
			          					<div class="col-sm-10">
			          						<h4>Choices has been filled by you.</h4>
			          						<br>
			          					</div>
			          					<div class="col-sm-6"></div>
			          					<div class="col-sm-4"></div>
			          					<div class="col-sm-2">
			          						<h4 style="text-align: right;margin-right: 10%;">Thank You</h4>
			          					</div>
			          				</div>
			          					<div class="buttonBody">
			          						<div class="prevButton">
			          							<button type="button" id="prevButtonID">Previous</button>
			          						</div>
			          						<div class="subButton">
			          							<button type="button" id="nextButtonID">Next</button>
			          						</div>
			          					</div>
			          			</div>
			          			<?php
			          				}
			          				function test_input($data) {
									$data = trim($data);
									$data = stripslashes($data);
									$data = htmlspecialchars($data);
									return $data;
									}
			          			?>
							</div>
			     	        <div class="tab-pane" id="4b">
								<div class="resultTitle">
									<h4>Choice Filling Result :</h4>
								</div>
								<?php
									$uIDD = $_SESSION['userID'];
									$quer = "SELECT * FROM `adminallot` where userID='".$uIDD."'";

									$ures = mysqli_query($connection,$quer);
									$n = mysqli_num_rows($ures);

									if($n==0)
									{
								?>

								<div class="resultBody">
									<h5>The Result has not been declared yet.</h5>
								</div>
								<?php
									}
									else
									{
										$urow = mysqli_fetch_array($ures);
										$allotR = $urow['allotBranch'];
								?>
									<div class="resultBody">
									<div class="resultDec row">
										<div class="col-sm-4">
											<h4 id="underLine">Branch Opted</h4>
										</div>
										<div class="col-sm-4">
											<h4 id="underLine">Result</h4>
										</div>
										<div class="col-sm-4">
											<h4 id="underLine">Date of Joining</h4>
										</div>
										<div class="col-sm-4">
											<h4><?php echo $allotR ; ?></h4>
										</div>
										<div class="col-sm-4">
											<h4>Yes</h4>
										</div>
										<div class="col-sm-4">
											<h4>2nd August'18</h4>
										</div>
									</div>
								</div>
								<div class="nextButton">
			          				<button type="submit" id="nextButtonID">Next</button>
			          			</div>
			          			<div class="prevButton">
			          				<button type="submit" id="prevButtonID">Previous</button>
			          			</div>
			          			<?php
			          				}
			          			?>
							</div>
							<div class="tab-pane" id="5b">
			          			<div class="allot">
			          				<div class="allotTitle">
			          					<h3 style="text-decoration: underline;">Allotment Related</h3>
			          					<h4>Branch : <strong><?php echo $allotR; ?></strong></h4>
			          				</div>
			          				<div class="allotBody row">
			          					<div class="col-sm-4">
			          						<h4 id="underLine">Teachers</h4>
			          					</div>
			          					<div class="col-sm-4">
			          						<h4 id="underLine">Qualification</h4>
			          					</div>
			          					<div class="col-sm-4">
			          						<h4 id="underLine">Experience</h4>
			          					</div>
			          					<?php 
			          						$uFq = "SELECT * FROM fadetails where `FSpecs` = '".$allotR."' ";

			          						$ufR = mysqli_query($connection,$uFq);
			          						
			          						$rows = mysqli_fetch_all($ufR,MYSQLI_ASSOC);

			          						foreach ($rows as $ufR1){
			          					?>
			          					<div class="col-sm-4">
			          						<h4><?php echo $ufR1['Fname'] ;?></h4>
			          					</div>
			          					<div class="col-sm-4">
			          						<h4><?php echo $ufR1['FSpecs'] ;?></h4>
			          					</div>
			          					<div class="col-sm-4">
			          						<h4><?php echo $ufR1['FExp'] ;?></h4>
			          					</div>

			          					<?php
			          						}
			          					?>

			          				</div>
			          				<div class="finishButton">
			          					
			          				<button type="submit" id="finishButtonID">Finish</button>
		          						
			          			</div>
			          			</div>
							</div>
						</div>
			  </div>

	</div>	
	<div class="container-fluid "><div class="row footer bodyPart2">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<h4>Project Made by Pragyan Dalmia</h4>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
	
	$('.nextButton').click(function(){
	 	
  $('.nav-pills > .active').next('li').find('a').trigger('click');
});
	$('.subButton').click(function(){
	 	
  $('.nav-pills > .active').next('li').find('a').trigger('click');
});
	$('.prevButton').click(function(){
  $('.nav-pills > .active').prev('li').find('a').trigger('click');
});
</script>
