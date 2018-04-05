
			          			<?php


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
																
										?>
										<div class="choiceFilled">
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
										else 

												echo "yoyoy";
										
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
						          		</div>
						          		<?php

											$sql="INSERT INTO `userchoices` (`userID`,`choiceA`, `choiceB`,`choiceC`,`choiceD`) values ('".$userID."', '".$choice1."', '".$choice2."', '".$choice3."','".$choice4."')";
											if (mysqli_query($connection, $sql)){
									        }
										    else{
															echo "ghus gyaa";
												
										        }
										}
														  function test_input($data) {
														  $data = trim($data);
														  $data = stripslashes($data);
														  $data = htmlspecialchars($data);
														  return $data;
														}

			          			?>