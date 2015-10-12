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

  <?php
    require '/var/www/html/includes/header.php';
  ?>

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
