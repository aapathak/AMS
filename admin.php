<?php
	session_start();
	if(!isset($_SESSION["userID"]))
	{
        header("Location:index.html");
        exit;
    }
    else
    {
    	include 'config.php';
    	$sql = "SELECT * FROM `userdetails`" ;

    	$result = mysqli_query($connection,$sql);
    	$users = array();
		$index = 0;
		
		$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
		


	}
    
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
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body style="overflow-y: hidden;">	
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
					<h4>Welcome, Admin</h4>
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
		<div class="adminStart row">
			<div class="Atitle container">
				<h2>Admin's Dashboard</h2>
			</div>
		</div>

		<div id="exTab3" class="container">	
			<ul  class="nav nav-pills">
				<li class="active">
	        	<a  href="#1b" data-toggle="tab">Manage Student Account</a>
				</li>
				<li><a href="#2b" data-toggle="tab">Allot Course</a>
				</li>
				<li><a href="#3b" data-toggle="tab">Manage Faculty Details</a>
				</li>
				
			</ul>

			<div class="tab-content clearfix">
				<div class="tab-pane active" id="1b">
          			<div class="stuStart row">
          				<div class="stuTitle col-sm-12">
          					<h4>Management</h4>
          				</div>
          				
          				<div class="col-sm-3">
          					<h4>Name</h4>
          				</div>
          				<div class="col-sm-2">
          					<h4>JEE Score</h4>
          				</div>
          				<div class="col-sm-3">
          					<h4>Email-ID</h4>
          				</div>
          				<div class="col-sm-2">
          					<h4>Select</h4>
          				</div>
          				<div class="col-sm-2">
          					<h4>Next</h4>
          				</div>
          			</div>
          			<div class="stuBody row">
          				<?php
							foreach ($rows as $row){
						?>
          				<form method="GET">
	          				<div class="col-sm-3">
	          					<h4><?php echo($row['fname']." ".$row['lname']);?></h4>
	          				</div>
	          				<div class="col-sm-2">
	          					<h4><?php echo($row['jeescore'])?></h4>
	          				</div>
	          				<div class="col-sm-3">
	          					<h4><?php echo($row['emailID'])?></h4>
	          				</div>
	          				<div class="col-sm-2">
	          					<input type="submit" style="text-align: center;" id="nextButtonID" 
	          					value="<?php echo ($row['userID']);?>" name="Proceed">
	          				</div>
	          				<?php
	          					$checkQue = "SELECT * FROM `adminallot` where userID='".$row['userID']."'";

	          					$find = mysqli_query($connection,$checkQue);

	          					$n = mysqli_num_rows($find);

	          					if($n==0)
	          					{

	          				?>
		          				<div class="col-sm-2 nextButton">
		          					<input type="button" style="float: left;margin-left: 4%;" name="nextButton" id="nextButtonID" value="Next">
		          				</div>
	          				<?php
	          					}
	          					else
	          					{
	          				?>
	          					<div class="col-sm-2 nextButton">
		          					<input type="button" disabled="true" style="float: left;margin-left: 4%;width: 100px;" name="nextButton" id="nextButtonID" value="Choice Filled">
		          				</div>
		          			<?php
		          				}
		          			?>
	          				<div class="col-sm-12"></div>
	          			</form>
	          			<?php
	          			}
	          			?>
          			</div>
			    </div>

			    <div class="tab-pane" id=2b>
			    
			    <?php
			    	if(isset($_GET['Proceed']))
					{
						$bID = $_GET["Proceed"];

						$sql1 = "SELECT * FROM `userchoices` where userID='".$bID."' ";
						$sql2 = "SELECT * FROM `userdetails` where userID='".$bID."' ";

						$res = mysqli_query($connection,$sql1);
						$r1  = mysqli_fetch_array($res);

						$res1 = mysqli_query($connection,$sql2);
						$r2  = mysqli_fetch_array($res1);

						$num = mysqli_num_rows($res);

						$fname = $r2['fname'];
						$lname = $r2['lname'];
						$score = $r2['jeescore'];

						if($num == 0)
						{
				?>
					<div class="noOption">
						<div class="row selectStu">
							<div class="col-sm-12">
								<h3>Choice Allotment</h3>
							</div>
							<div class="col-sm-3">
								<h4>Name</h4>
							</div>
							<div class="col-sm-6">
								<h4><?php echo $fname;?></h4>
							</div>
							<div class="col-sm-9">
								<h3>Selected Student has not yet filled any choices.</h3>
							</div>
						</div>
						<div class="buttonBody">
			          		<div class="prevButton">
			          			<button type="button" id="prevButtonID">Previous</button>
			          		</div>
			          		<div class="nextButton">
			          			<button type="submit" id="nextButtonID">Next</button>
			          		</div>
			          	</div>
			        </div>
				<?php
						}
						else
						{
							$pr1 = $r1['choiceA'];
							$pr2 = $r1['choiceB'];
							$pr3 = $r1['choiceC'];
							$pr4 = $r1['choiceD'];
				?>
					<div class="selectStu row">
          				<div class="col-sm-12">
          					<h4>Allotment of Course</h4>
          				</div>
          				<div class="col-sm-3">
          					<h4>Selected Student</h4>
          				</div>
          				<div class="col-sm-3">
          					<h4><?php echo $fname;?></h4>
          				</div>
          				<div class="col-sm-3">
          					<h4>JEE Score</h4>
          				</div>
          				<div class="col-sm-3">
          					<h4><?php echo $score;?></h4>
          				</div>
          				<div class="col-sm-3">
          					<h5>Priority 1</h5>
          				</div>
          				<div class="col-sm-3">
          					<h4><?php echo $pr1;?></h4>
          				</div>
          				<div class="col-sm-3">
          					<h5>Priority 2</h5>
          				</div>
          				<div class="col-sm-3">
          					<h4><?php echo $pr2;?></h4>
          				</div>
          				<div class="col-sm-3">
          					<h5>Priority 3</h5>
          				</div>
          				<div class="col-sm-3">
          					<h4><?php echo $pr3;?></h4>
          				</div>
          				<div class="col-sm-3">
          					<h5>Priority 4</h5>
          				</div>
          				<div class="col-sm-3">
          					<h4><?php echo $pr4;?></h4>
          				</div>
          				<div class="col-sm-10">
          					<h4>Alloted Course</h4>
          				</div>
          				<form method="POST" action="#">
          				<div class="col-sm-12">
          					<select name="choiceFinal">
          						<option value="None Selected">None Selected</option>
							    <option value="<?php echo $pr1;?>"><?php echo $pr1;?></option>
							    <option value="<?php echo $pr2;?>"><?php echo $pr2;?></option>
							    <option value="<?php echo $pr3;?>"><?php echo $pr3;?></option>
							    <option value="<?php echo $pr4;?>"><?php echo $pr4;?></option>
							</select>
          				</div>
          				<br><br>
          				<hr>
          				<div class="subButton">
          					<input name="subOption" type="submit" id="nextButtonID">
          				</div>
          				<div class="prevButton">
          					<button type="button" id="prevButtonID">Previous</button>
          				</div>
          				<div class="nextButton">
          					<button type="button" id="nextButtonID">Next</button>
          				</div>
          				</form>
          			</div>
				<?php
						}
					}
					if(isset($_POST['choiceFinal']))
					{
						$opt = $_POST["choiceFinal"];
						print_r($opt);

						$uID = $_SESSION['userID'];
						print_r($bID);

						$quer = "INSERT INTO `adminallot` (`userID`,`allotBranch`) values ('".$bID."', '".$opt."')";

						include 'config.php';

						if (mysqli_query($connection, $quer))
				    	{
						}
						else{
							error_reporting(E_ALL);
							echo "ghus gyaa";
							}
					}

				?>	
			    </div>
			
        		<div class="tab-pane" id="3b">
          			<div class="facultyBody row">
          				<div class="col-sm-10">
          					<h3>Faculty Management</h3>
          				</div>
          				<div class="col-sm-10">
          					<h4>Add New Faculty</h4>
          				</div>
          				<div class="col-sm-4">
          					<h4>Name</h4>
          				</div>
          				<div class="col-sm-4">
          					<h4>Specialization</h4>
          				</div>
          				<div class="col-sm-4">
          					<h4>Experience (in Years)</h4>
          				</div>
          				<form action="" method="POST">
	          				<div class="col-sm-4">
	          					<input type="text" id="in" style="width: 60%;color: black;outline: none;border: solid 1px black;border-radius: 8px;padding: 1%;" name="FaName" placeholder="Enter Faculty Name">
	          				</div>
	          				<div class="col-sm-4">
	          					<input id="in" type="text" name="Specs" style="width: 60%;border: solid 1px black;border-radius: 8px;padding: 1%;color: black;outline: none;" placeholder="Specialization">
	          				</div>
	          				<div class="col-sm-4">
	          					<input type="text" style="width: 60%;border: solid 1px black;border-radius: 8px;padding: 1%;color: black;outline: none;" id="in" name="Exp" placeholder="Faculty Experience">
	          				</div><br>
	          				<div class="col-sm-12 subButton">
	          					<input type="submit" style="float: right;margin-top: 3%;" name="fSubmit" value="Submit" id="nextButtonID">
	          				</div>
          				</form>
          			</div>
          			<?php
          				if(isset($_POST['FaName']))
          				{
          					$naF = $_POST['FaName'];
          					$spe = $_POST['Specs'];
          					$exp = $_POST['Exp'];

          					$fQue = "INSERT INTO `fadetails` (`Fname`,`FSpecs`,`FExp`) values ('".$naF."', '".$spe."', '".$exp."') ";

          					if(mysqli_query($connection,$fQue))
          					{}
          					else
          					{
          						echo "ghus gya";
          					}
          				}
          			?>
				</div>
			</div>
			
		</div>
	</div>
	<div class="container-fluid">
		<div class="row footer bodyPart2">
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

<script type="text/javascript">
	function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     console.log(this.responseText);
    }
  };
  xhttp.open("GET", "dummy.php", true);
  xhttp.send();
}
loadDoc();
function lodaLelo()
{
	console.log(this);
	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     console.log(this.responseText);
    }
  };
  xhttp.open("GET", "dummy1.php?buttonID", true);
  xhttp.send();
}
</script>