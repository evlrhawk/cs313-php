<?php
// connect to db
require('dbConnect.php');
$db = get_db();

// query for all recipes
// $stmt = $db->prepare('SELECT * FROM table WHERE id=:id AND name=:name');
// $stmt->bindValue(':id', $id, PDO::PARAM_INT);
// $stmt->bindValue(':name', $name, PDO::PARAM_STR);
// $stmt->execute();
// $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

$id = $_GET["id"];



$stmt = $db->prepare('SELECT name, recipe, pic FROM recipes WHERE id = :id');
$stmt->bindValue(":id", $id, PDO::PARAM_INT);
$stmt->execute();
$recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $db->prepare('SELECT id, rating, comment FROM comments WHERE recipes_id = :id');
$stmt->bindValue(":id", $id, PDO::PARAM_INT);
$stmt->execute();
$comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $db->prepare('SELECT id, category FROM categories ORDER BY category');
$stmt->execute();
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

// go through each recipe in the result and display it
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
      <form>
         <p class="text-left">Category:</p>
         <ul>
            <li class="text-left"><a href="recipesSearch.php">All</a></li>
            <?php
               foreach ($categories as $category) {
                  $name = $category['category'];
                  $id = $category['id'];
                  echo "<li class='text-left'><a href=";
                  echo '"recipesSearch1.php?id=';
                  echo "$id" . '">';
                  echo $name . "</a></li>";
               }
            ?>
         </ul>
      </form>
    </div> 
    <div style="text-align: center;" class="col-sm-8 text-left">
      <br><br>
      <?php
         foreach ($recipes as $recipe) {
            $name = $recipe['name'];
            $pic = $recipe['pic'];
            $recipe = $recipe['recipe'];
            echo " <div class='col-sm-8 text-left'>
            <img class='img2' src='$pic' alt='$name'><br><br>
            $name<pre>$recipe</pre></div>";
         }
      ?>
    </div>
       
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>