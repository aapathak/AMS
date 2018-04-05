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
<body>	
	<div class="container-fluid">
		<div class="row navBar">
			<div class="row imgBarTop col-sm-5">
				<div class="col-sm-3">
					<a href="index.html">
						<img src="images/logo.png">
					</a>
				</div>
				<div class="col-sm-9">
					<a href="index.html">
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
						<li><a href="#4b" data-toggle="tab">Assign Faculty</a>
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
			          					<h4>Action</h4>
			          				</div>
			          				<div class="col-sm-2">
			          					<h4>Select</h4>
			          				</div>
			          			</div>		
			          			<div class="row stuBody">
			          				<?php
										foreach ($rows as $row){
									?>
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
				          					<h4><input type="submit" value="Delete" style="color: black;margin-bottom: 2%;border:solid 1px black;border-radius: 8px;padding: auto;" name="<?php echo ($row['userID']);?>" id="delID"
				          						>
				          					</h4>
				          				</div>
				          				<div class="col-sm-2 nextButton">
				          					<input onclick="lodaLelo(this)" type="button" style="text-align: center;float: left;width: 100px;" id="nextButtonID" 
				          					value="<?php echo ($row['userID']);?>" name="Proceed">
				          				</div>
				          			<?php
				          			}
				          			?>
				          		</div>
		          			</div>
		          			<div class="tab-pane" id="2b">
		          				
		          			</div>
			        		<div class="tab-pane" id="3b">
			          		
							</div>
			     	        <div class="tab-pane" id="4b">
							
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
function lodaLelo(elem)
{
	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     console.log("bkl yehi hai: " + this.responseText);
    }
  };
  xhttp.open("GET", "dummy1.php?buttonID="+elem.value, true);
  xhttp.send();
}
</script>