<!DOCTYPE html>
<html lang="en">
<head>
  <title>Campustry | Advanced Search</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
        </button>
        <a class="navbar-brand" href="#">Campustry</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="search.php"><span class="glyphicon glyphicon-search"></span> Search</a></li>
          <li><a  class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Profile
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="viewProfile.php">View</a></li>
              <li><a href="editProfile.php">Edit</a></li>
            </ul></li>
            <li><a href="messages.php"><span class="glyphicon glyphicon-envelope"></span> Messages<span class="badge">2</span></a></li> 
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="viewProfile.php"><img src="images/john_doe.jpg" class="img-circle" alt="Cinque Terre" width="25" height="25"> John</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
            <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <br><br><br><br>

    <div class="container">
      <ul class="nav nav-tabs">
        <li><a href="search.php">Basic</a></li>
        <li class="active"><a href="#">Advanced</a></li>
        <li><a href="recentSearch.php">Recent</a></li>
      </ul>
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        </ul><br><br><br>
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <div class="panel panel-default">
              <div class="panel-body">
                <form role="form" action="searchResults.php">
                  <div class="form-group">
                    <input class="form-control input-lg" id="inputlg" type="text" placeholder = "First name"><br>
                    <input class="form-control input-lg" id="inputlg" type="text" placeholder = "Last name"><br>
                    <input class="form-control input-lg" id="inputlg" type="text" placeholder = "Email"><br>
                    <input class="form-control input-lg" id="inputlg" type="text" placeholder = "Skills"><br>
                    <input class="form-control input-lg" id="inputlg" type="text" placeholder = "Projects"><br>
                    <input class="form-control input-lg" id="inputlg" type="text" placeholder = "Research interests"><br>
                    <button type="submit" class="btn btn-default btn-lg">
                      <span class="glyphicon glyphicon-search"></span> Search
                    </button>
                  </div>
                </form>
              </div></div>
              <div class="col-sm-2"></div>
            </div>
          </div>
        </body>
        </html>
