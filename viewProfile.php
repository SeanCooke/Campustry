<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Campustry | Profile</title>
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
    
    /*
      Getting FirstName, LastName, EMail and About_Me from our database and assigning them to the
      variables $FirstName, $LastName, $Email and $About_Me, respectively
    */
    require 'db_conn.php';
    $userId = $_SESSION['userId'];
    $sql = "SELECT u.FirstName, u.LastName, u.EMail, up.About_Me FROM Users u , UsersProfile up WHERE u.UserID = '$userId' and u.UserID = up.UserID";
    $retval = mysql_query( $sql, $conn );
	if(! $retval )
	{
	  die('Could not get data: ' . mysql_error());
	}
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
	{
	  $firstname = $row['FirstName'];
	  $lastname = $row['LastName'];
	  $email = $row['EMail'];
	  $aboutme = $row['About_Me'];
	} 
    ?>

  <br><br><br><br>

  <div class="container">

	<!-- input field to hold userId -->  
    <input id="userId" name="userId" type="hidden"></input>
                
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="row">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-4">
                <img src="images/Koala.jpg" class="img-circle" alt="Cinque Terre" width="300" height="250">
              </div>
              <div class="col-sm-5"><a href="#"><h3><span id="firstname"><?php echo $firstname; ?></span>&nbsp;<span id="lastname"><?php echo $lastname; ?></span></h3></a><!-- First year, Undergraduate, Computer Science --><br><br>
                <span class="label label-primary">Email Address</span> : <span id="email"><?php echo $email; ?></span><br><br>
                <span class="label label-primary">About <span id="firstnameAbout"></span> </span>: <span id="aboutme"><?php echo $aboutme; ?></span><br><br>
<!--
                <span class="label label-primary">Contact</span> : 585-123-4567<br><br>
                <span class="label label-primary">Courses</span> : CSC254, CSC171, CSC170<br><br>
                <span class="label label-primary">Skills</span> : Java, Ruby, Python<br><br>
                <span class="label label-primary">Research Interests</span> : Programming language design<br><br>
                <span class="label label-primary">Project/s</span> : DVCS, Automated Library System<br><br>
                <span class="label label-primary">Hobbies</span> : Cooking, Traveling<br><br>
-->
              </div>
              <div class="col-sm-3"><br>
<!--
                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal">Send message</button><br>
                <div class="panel panel-default">
                  <div class="panel-heading" align="center">Connect with <b>Alan</b></div>
                  <div class="panel-body" align="center">
                    <a href="#"><img src="images/facebook.png" class="img-circle" alt="Cinque Terre" width="50" height="50"></a>&nbsp;&nbsp;
                    <a href="#"><img src="images/linkedin.png" class="img-circle" alt="Cinque Terre" width="50" height="50"></a>&nbsp;&nbsp;
                    <a href="#"><img src="images/twitter.png" class="img-circle" alt="Cinque Terre" width="50" height="50"></a>
                  </div> 
                </div>
              </div>
-->
            </div>
          </div>
        </div>
      </div>
      <div class="panel-footer">
        <ul class="pager">
          <li ><a href="searchResults.php">Back to search results</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">To: Alan Pitch</h4>
        </div>
        <div class="modal-body">
          <p>Hello Alan, I would like to meet you to discuss my project. </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Send</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>