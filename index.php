<?php
	session_start();
	if(isset($_SESSION["userID"]))
	{
        header("Location:dashboard.php");
        exit;
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
	<link rel="stylesheet" type="text/css" href="css/indexStyle.css">
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
					<a href="index.html">
						<h3>Institute Of Engineering And Technology, Lucknow</h3>
					</a>
				</div>
			</div>
			<div class="col-sm-2"></div>
			<div class="col-sm-5 loginMenu">
				<div class=" loginBarA">
					<form method="POST" action="verifyUser.php">
						<div class="colsm4">
							<input type="email" name="EmailID" placeholder="Email">
						</div>
						<div class="colsm4">
							<input type="password" name="PasswordInput" placeholder="Password">
						</div>
						<div class="colsm4">
							<button type="submit" onclick="#">Login</button>
						</div>
					</form>
				</div>
				<div class="row loginBarB">
					<div class="colsm6">
						<div id="forgotText" data-toggle="modal" data-target="#forgotPassModal">
							<a href="#">Forgot Password?</a>
						</div>
					</div>
					<div class="colsm6">
						<div id="signUpText" data-toggle="modal" data-target="#signUpModal">
							<a href="register.html">New User? Sign Up</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!------------------------------------ CAROUSEL ---------------------------- -->
		<div class="row carouselBar">
		<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2800">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		    </ol>

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner">

		      <div class="item active">
		        <img src="images/carousel1.png" style="width:100%;height: 65vh;">
		        <div class="carousel-caption">
		          <h3>IET, Lucknow</h3>
		          <p>Ranked 2nd Best College in U.P</p>
		        </div>
		      </div>

		      <div class="item">
		        <img src="images/carousel2.png" style="width:100%;height: 65vh;">
		        <div class="carousel-caption">
		          <h3>MUN Court</h3>
		          <p>Organized United Nations Conference at a State Level</p>
		        </div>
		      </div>
		    
		      <div class="item">
		        <img src="images/carousel4.png" style="width:100%;height: 65vh;">
		        <div class="carousel-caption">
		          <h3>Competition is Fun</h3>
		          <p>And Learning becomes a Passion</p>
		        </div>
		      </div>
		  
		    </div>

		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right"></span>
		      <span class="sr-only">Next</span>
		    </a>
		</div>
		</div>

		<div class="bodyPart1 row">
			<div class="col-sm-3">
				<div class="imgMsg1">
					<img src="images/chair.png" style="width: 90%;height: 45vh;">
				</div>
			</div>
			<div class="col-sm-9 imgMsg2">
				<div class="headingPart">
					<h3>Chairman's Message</h3>
				</div>
					<p>The mission of the institute is to develop in our students ever-widening horizons of knowledge and wisdom, resolute will power which leads to self-control and self-mastery, universal love and develop strong and healthy bodies, courage and heroism. The Istitute is dedicated to serve the highest interests of nation-building that can ensure vast synthesis of knowledge and harmonious perfection of the individual and the collectivity.
					It is very much apparent that we live today in a world that is so very different from the one we grew up in, the one we were educated in. Change in today’s world is riding an accelerated pace and we need to pause and reflect it on the entire education system. I firmly believe that students must be taught how to think, not what to think. That reminds me of the great words of wisdom by Aristotle, “Educating the mind without educating the heart is no education at all.”
					</p>
			</div>
		</div>
		<div class="row bodyPart2">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<h4>Project Made by Pragyan Dalmia</h4>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>







				<!------------------------------ 1st Modal - Forgot ----------------------- -->
						<div class="modal fade" id="forgotPassModal" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Forgot Password</h4>
					        </div>
					        <div class="modal-body row">
					        	<form method="GET" action="#">
						        	<div class="row">
						        	<div class="col-sm-5">
						        		<h4>Email ID</h4>
						        	</div>
						        	<div class="col-sm-7">
						        		<input type="email" name="forgotEmail">
						        	</div>
						        	</div>
						        	<div class="row">
						        		<div class="col-sm-5">
						        			<h4>Date of Birth</h4>
						        		</div>
						        		<div class="col-sm-7">
						        			<input type="date" name="forgotDOB">
						        		</div>
						        	</div>
						        	
						        </form>
					        </div>
					        <div class="modal-footer">
					          <h5>*Please Check your Email-ID for confirmation Mail.</h5>
					          <button type="submit" class="btn" data-dismiss="modal">Submit</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div>
					      </div>
					     </div>
					    </div>
					      

					     
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>