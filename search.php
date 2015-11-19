<!DOCTYPE html>
<html lang="en">
<head>
  <title>Campustry | Search</title>
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
<!--
      <li ><a href="advancedSearch.php">Advanced</a></li>
      <li><a href="recentSearch.php">Recent</a></li>
-->
    </ul><br><br><br><br><br>

    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <div class="panel panel-default">
          <div class="panel-body">
            <form role="form" method="GET" action="searchResults.php">
              <div class="form-group">
                <input class="form-control input-lg" id="inputlg" type="text" name="query" placeholder = "Name, Email, About Me"><br>
                <button type="submit" class="btn btn-default btn-lg">
                  <span class="glyphicon glyphicon-search"></span> Search
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-sm-2"></div>
      </div>
    </div>
  </body>
  </html>