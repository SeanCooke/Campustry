<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Campustry | Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<script type="text/javascript">
	$(document).ready(function(){
		userName = localStorage['userName'] 
		userId = localStorage['userId'] 
		if (userName!=undefined && userId!=undefined){
			window.location = 'search.php'
		}
	});
	</script>
	<?php 
	if(isset($_POST['signUp']))
	{
		require 'db_conn.php';
		if(! get_magic_quotes_gpc() )
		{
			$firstName = addslashes ($_POST['firstName']);
			$lastName = addslashes ($_POST['lastName']);
			$email = addslashes ($_POST['email']);
			$password = addslashes ($_POST['password']);
		}
		else
		{
			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];
			$email = $_POST['email'];
			$password = $_POST['password'];
		}

		$sql = "INSERT INTO Users ".
		"(firstName, lastName, email, pwd) ".
		"VALUES ".
		"('$firstName', '$lastName', '$email', '$password')";

		$retval = mysql_query( $sql, $conn );
		$insertId = mysql_insert_id();
		if(! $retval )
		{
			die('Could not enter data: ' . mysql_error());
		}
		$sql = "INSERT INTO UsersProfile ".
		"(userId) ".
		"VALUES ".
		"('$insertId')";
		$retval = mysql_query( $sql, $conn );
		if(! $retval )
		{
			die('Could not enter data: ' . mysql_error());
		}
		mysql_close($conn);
		header('Location: ./registered.php');
	}
	else if(isset($_POST['signIn']))
	{
		require 'db_conn.php';
		if(! get_magic_quotes_gpc() )
		{
			$email = addslashes ($_POST['email']);
			$password = addslashes ($_POST['password']);
			$rememberMe = addslashes ($_POST['rememberMe']);
		}
		else
		{
			$email = $_POST['email'];
			$password = $_POST['password'];
			$rememberMe = $_POST['rememberMe'];
		}

		$sql = "SELECT userId, firstName FROM Users where email = '$email' and pwd = '$password'";
		$result = mysql_query( $sql, $conn );

		if (mysql_num_rows($result)>0) {
			while ($row = mysql_fetch_assoc($result)) {
				$userId = $row['userId'];
				$firstName = $row['firstName'];
				$_SESSION['userId'] = $userId;
				$_SESSION['userName'] = $firstName;

				echo "<script type=\"text/javascript\">
				if('$rememberMe'=='on'){
					localStorage['userId'] = '$userId'
					localStorage['userName'] = '$firstName'
				}
			</script>";
			} 
			mysql_close($conn);
			echo " <script> window.location = 'search.php'</script> ";
		}
		else {
		echo "<script> window.location = 'index.php?status=Invalid Username or Password!';</script> ";
		mysql_close($conn);
		}
	}
	else
	{
	?>
	<div class="container">
		<div class="page-header" align="center" style="background-color:black;color:#f0f0f0"><br>
			<h1>Welcome to Campustry</h1> 
			<p>An academic networking site that connects you with students and faculties</p><br>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="panel panel-default">
					<div class="panel-heading">Sign in</div>
					<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="<?php $_PHP_SELF ?>">
							<div class="form-group">
								<div class="col-sm-10">
									<input type="email" class="form-control" name="email" id="email" placeholder="Email">
								</div>
							</div>
							<div class="form-group">     
								<div class="col-sm-10">          
									<input type="password" class="form-control" name="password" id="password" placeholder="Password">
								</div>
							</div>
							<div class="form-group">        
								<div class="col-sm-5">
									<div class="checkbox">
										<label><input type="checkbox" id="rememberMe" name="rememberMe"> Remember me</label>
									</div>
								</div>
							</div>
							<div class="form-group">        
								<div class="col-sm-5">
									<button type="submit" class="btn btn-default" name="signIn" id="signIn">Sign in</button><br><br>
									<p id="status"><font color="red"><?php echo $_GET['status']; ?></font></p>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="panel panel-default">
					<div class="panel-heading">Sign up</div>
					<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="<?php $_PHP_SELF ?>">
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="firstName" id="firstName" placeholder="First name">
								</div>
							</div>
							<div class="form-group">     
								<div class="col-sm-10">          
									<input type="text" class="form-control" name = "lastName" id="lastName" placeholder="Last name">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="email" class="form-control" name = "email" id="email" placeholder="Email">
								</div>
							</div>
							<div class="form-group">     
								<div class="col-sm-10">          
									<input type="password" class="form-control" name = "password" id="password" placeholder="Password">
								</div>
							</div>
							<div class="form-group">        
								<div class="col-sm-5">
									<button type="submit" class="btn btn-default" name="signUp" id="signUp">Sign up</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
?>
</body>
</html>
