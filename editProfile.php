<!DOCTYPE html>

<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
?>

<html lang="en">
<head>
  <title>Campustry | Edit Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
  <script type="text/javascript" charset="utf-8">
  	// assigning the JavaScript variable userId to the current user's ID using localStorage[]
    $(document).ready(function() {
    	var userId = localStorage['userId'];
		$("#userId").val(userId);    
    });
  </script>
  
  
</head>
<body>

  <?php
    require 'includes/header.php';
    
    // Processing Form Submission
	if(isset($_POST['save']))
	{
		require 'db_conn.php';
		if(! get_magic_quotes_gpc() )
		{
			$userid = addslashes ($_POST['userId']);
			$firstName = addslashes ($_POST['FirstName']);
			$lastName = addslashes ($_POST['LastName']);
			$email = addslashes ($_POST['EMail']);
			$password = addslashes ($_POST['PWD']);
			$about_me = addslashes ($_POST['About_Me']);
		}
		else
		{
			$userid = ($_POST['userId']);
			$firstName = $_POST['FirstName'];
			$lastName = $_POST['LastName'];
			$email = $_POST['EMail'];
			$password = $_POST['PWD'];
			$about_me = $_POST['About_Me'];
		}

		$sql = "Update Users SET FirstName='$firstName', LastName='$lastName', EMail='$email', PWD='$password' WHERE UserID=$userid";

		$retval = mysql_query( $sql, $conn );
		$insertId = mysql_insert_id();
		if(! $retval )
		{
			die('Could not enter data: ' . mysql_error());
		}
		
		$sql = "Update UsersProfile SET About_Me='$about_me' WHERE UserID=$userid";
		
		$retval = mysql_query( $sql, $conn );
		if(! $retval )
		{
			die('Could not enter data: ' . mysql_error());
		}
		
		mysql_close($conn);
		header('Location: ./viewProfile.php');		
		
	}
    
  ?>

  <br><br><br><br>

  <div class="container">
    <div class="panel panel-default">
      <form method="POST">
	      <div class="panel-body">
	        <div class="row">
	          <div class="col-sm-12">
	            <div class="row">
	              <div class="col-sm-4"><br>
	                <div class="panel panel-default">
	                  <div class="panel-body">
	                    <img src="images/john_doe.jpg" class="img-circle" alt="Cinque Terre" width="300" height="250">
	                  </div>
	                  <div class="panel-footer" align="center"><a href="#">Change picture</a></div>
	                </div>
	              </div>
	              <div class="col-sm-8"><br>
	              	<div class="form-group">
					  	<input id="userId" name="userId" type="hidden" required></input>
					  	<input class="form-control inputdefault" id="FirstName" name="FirstName" type="text" placeholder = "First Name" required><br>
		                <input class="form-control inputdefault" id="LastName" name="LastName" type="text" placeholder = "Last Name" required><br>	                
		                <input class="form-control inputdefault" id="EMail" name="EMail" type="text" placeholder = "Email Address" required><br>
		                <input class="form-control inputdefault" id="PWD" name="PWD" type="text" placeholder = "Password" required><br>	                
						<textarea class="form-control" rows="5" id="About_Me" name="About_Me"  placeholder = "About Me" required></textarea>
	              	</div> <!-- end form-group -->
<!--
	                <input class="form-control inputdefault" id="" name="" type="text" placeholder = "Contact"><br>
	                <input class="form-control inputdefault" id="" name="" type="text" placeholder = "Courses"><br>
	                <input class="form-control inputdefault" id="" name="" type="text" placeholder = "Skills"><br>
	                <input class="form-control inputdefault" id="" name="" type="text" placeholder = "Research Interests"><br>
	                <input class="form-control inputdefault" id="" name="" type="text" placeholder = "Project/s"><br>
	                <input class="form-control inputdefault" id="" name="" type="text" placeholder = "Hobbies"><br>
-->
	              </div> <!-- end col-sm-8 -->
	              
<!--
	              <div class="col-sm-3"><br>
	                <div class="panel panel-default">
	                  <div class="panel-heading" align="center">Social networking URL</div>
	                  <div class="panel-body" align="center">
	                    <a href="#"><img src="images/facebook.png" class="img-circle" alt="Cinque Terre" width="50" height="50" ></a>&nbsp;&nbsp;
	                    <input class="form-control input-lg" id="" name="" type="text" placeholder = "Facebook"><br>
	                    <a href="#"><img src="images/linkedin.png" class="img-circle" alt="Cinque Terre" width="50" height="50"></a>&nbsp;&nbsp;
	                    <input class="form-control input-lg" id="" name="" type="text" placeholder = "Linkedin"><br>
	                    <a href="#"><img src="images/twitter.png" class="img-circle" alt="Cinque Terre" width="50" height="50"></a>&nbsp;&nbsp;
	                    <input class="form-control input-lg" id="" name="" type="text" placeholder = "Twitter"><br>
	                  </div>
	                </div>
	              </div>
	            </div>
-->
	          
	          </div>
	        </div>
	      </div>
	      <div class="panel-footer">
	        <ul class="pager">	        	
	          <button type="submit" name="save" class="btn btn-default">Save</button>
	          <button type="submit" name="Discard" class="btn btn-default">Discard</button>
	        </ul>
	      </div> <!--  end panel-footer -->
      </form>
    </div> <!-- end panel panel-default -->
  </div> <!-- end container -->
</body>
</html>