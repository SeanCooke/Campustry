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