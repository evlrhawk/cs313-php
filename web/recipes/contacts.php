<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Righteous Recipes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="recipes.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>
<!-- header -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="recipes.php">RR</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="recipes.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="recipesSearch.php">Recipes</a></li>
        <li><a href="contacts.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <?php
              
          if (isset($_SESSION["login"])) {
            echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-in'></span> Log Out</a></li>";
          }
          else{
            echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login | Sign Up</a></li>";
          }
        
        ?>
      </ul>
    </div>
  </div>
</nav>
  
  <!-- body -->
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><img src="https://www.vindulge.com/wp-content/uploads/2016/04/Mexican-Smoked-Burgers-2-727x1024.jpg" alt="Burnt Ends"></p>
    </div>
    <div style="text-align: center;" class="col-sm-8 text-left"> 
      <h1> Contact Us Here at Righteous Recipes!</h1>      
      <hr>
      <form class="text-center" action="mail.php" method="post">
        <label>Email:</label><br>
        <input type="text" name="from" required>
        <br><br>
        <label>Subject:</label><br>
        <input type="text" name="sub" required>
        <br><br>
        <label>Message:</label><br>
        <textarea name="message" required></textarea>
        <br><br>
        <input type="submit" name="submit" value="submit">
      </form>
    </div>
    <div class="col-sm-2 sidenav">
        <img src="http://blog.gentlemint.com/media/photos/plated-tomahawk-steak-restaurant.jpg.1170x750_q85.jpg" alt=" Tomahawk Ribeye">
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
