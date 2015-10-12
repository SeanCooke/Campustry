<!DOCTYPE html>
<html lang="en">
<head>
  <title>Campustry | Edit Profile</title>
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
          <li ><a href="search.php"><span class="glyphicon glyphicon-search"></span> Search</a></li>
          <li class="active"><a class="dropdown-toggle" data-toggle="dropdown" href=""><span class="glyphicon glyphicon-user"></span> Profile
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="viewProfile.php">View</a></li>
              <li><a href="editProfile.php">Edit</a></li>
            </ul>
          </li>
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
    <div class="panel panel-default">
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
              <div class="col-sm-5"><br>
                <input class="form-control inputdefault" id="inputlg1" type="text" placeholder = "John Doe"><br>
                <input class="form-control inputdefault" id="inputlg1" type="text" placeholder = "First year, Undergraduate, Computer Science"><br>
                <input class="form-control inputdefault" id="inputlg1" type="text" placeholder = "Email Address"><br>
                <input class="form-control inputdefault" id="inputlg1" type="text" placeholder = "Contact"><br>
                <input class="form-control inputdefault" id="inputlg1" type="text" placeholder = "Courses"><br>
                <input class="form-control inputdefault" id="inputlg1" type="text" placeholder = "Skills"><br>
                <input class="form-control inputdefault" id="inputlg1" type="text" placeholder = "Research Interests"><br>
                <input class="form-control inputdefault" id="inputlg1" type="text" placeholder = "Project/s"><br>
                <input class="form-control inputdefault" id="inputlg1" type="text" placeholder = "Hobbies"><br>
              </div>
              <div class="col-sm-3"><br>
                <div class="panel panel-default">
                  <div class="panel-heading" align="center">Social networking URL</div>
                  <div class="panel-body" align="center">
                    <a href="#"><img src="images/facebook.png" class="img-circle" alt="Cinque Terre" width="50" height="50"></a>&nbsp;&nbsp;
                    <input class="form-control input-lg" id="inputlg1" type="text" placeholder = "Facebook"><br>
                    <a href="#"><img src="images/linkedin.png" class="img-circle" alt="Cinque Terre" width="50" height="50"></a>&nbsp;&nbsp;
                    <input class="form-control input-lg" id="inputlg2" type="text" placeholder = "Linkedin"><br>
                    <a href="#"><img src="images/twitter.png" class="img-circle" alt="Cinque Terre" width="50" height="50"></a>&nbsp;&nbsp;
                    <input class="form-control input-lg" id="inputlg3" type="text" placeholder = "Twitter"><br>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel-footer">
        <ul class="pager">
          <li ><a href="viewProfile.php">Save</a></li>
          <li ><a href="viewProfile.php">Discard</a></li>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>