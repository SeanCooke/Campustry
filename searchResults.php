<!DOCTYPE html>
<html lang="en">
<head>
  <title>Campustry | Search Results</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

  <?php
    require 'includes/header.php';
    require_once 'db_conn.php';
  ?>

<br><br><br><br>

<div class="container">
<ul class="nav nav-tabs">
    <li class="active"><a href="search.php">Basic</a></li>
<!--
    <li ><a href="advancedSearch.php">Advanced</a></li>
    <li><a href="recentSearch.php">Recent</a></li>
-->
</ul>
<div class="panel panel-default">
  <div class="panel-heading">Search Results</div>
  <div class="panel-body">
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8">
<ul class="list-group">
    <?php
    	$query = $_GET['query'];
    	$query_sql = "SELECT U.FirstName, U.LastName, U.EMail, P.About_Me 
     				    FROM Users U Left Join UsersProfile P
					      ON U.UserID = P.UserID
					   WHERE U.FirstName like '%$query%' or U.LastName like '%$query%' or U.EMail like '%$query%' or P.About_Me like '%$query%'";
		$query_result = mysql_query($query_sql, $conn);
		while($query_row = mysql_fetch_array($query_result, MYSQL_ASSOC)){
			echo "<li class='list-group-item'>
				  	<div class='row'>
			  			<img src='images/Koala.jpg' class='img-circle' alt='Cinque Terre' width='100' height='80'>
			  			<div class='col-sm-8'>
			  				<a href='viewProfile.php'><h3>".$query_row['FirstName']." ".$query_row['LastName']."</h3></a><a href='mailto:".$query_row['EMail']."'>".$query_row['EMail']."</a><br>".$query_row['About_Me']."
			  			</div>
				  </li>";
		}  
    ?>
</ul></div>
<div class="col-sm-2"></div></div>
</div>
<!--
<div class="panel-footer">
  <ul class="pager">
  <li ><a href="#">&lt;</a></li>
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li ><a href="#">&gt;</a></li>
</ul>
-->

</div>
</div>
</div>

</body>
</html>
