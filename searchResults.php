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
  ?>

<br><br><br><br>

<div class="container">
<ul class="nav nav-tabs">
    <li class="active"><a href="search.php">Basic</a></li>
    <li ><a href="advancedSearch.php">Advanced</a></li>
    <li><a href="recentSearch.php">Recent</a></li>
</ul>
<div class="panel panel-default">
  <div class="panel-heading">Search Results</div>
  <div class="panel-body">
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8">
<ul class="list-group">
  <li class="list-group-item">
    <div class="row">
    <div class="col-sm-4">
      <img src="images/Koala.jpg" class="img-circle" alt="Cinque Terre" width="100" height="80">
    </div>
    <div class="col-sm-8"><a href="viewProfile.php"><h3>Alan Pitch</h3></a>First year, Undergraduate, Computer Science</div></div>
  </li>
  <li class="list-group-item">
    <div class="row">
    <div class="col-sm-4">
      <img src="images/Tulips.jpg" class="img-circle" alt="Cinque Terre" width="100" height="80">
    </div>
    <div class="col-sm-8"><a href="#"><h3>Alan Wilcox</h3></a>Second year, Ph.D, Biophysics</div></div>
  </li>
  <li class="list-group-item">
    <div class="row">
    <div class="col-sm-4">
      <img src="images/Penguins.jpg" class="img-circle" alt="Cinque Terre" width="100" height="80">
    </div>
    <div class="col-sm-8"><a href="#"><h3>Andrew Alan</h3></a>First year, Masters, Chemistry</div></div>
  </li>
</ul></div>
<div class="col-sm-2"></div></div>
</div>
<div class="panel-footer">
  <ul class="pager">
  <li ><a href="#">&lt;</a></li>
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li ><a href="#">&gt;</a></li>
</ul>

</div>
</div>
</div>

</body>
</html>
