<?php 
   session_start();
   require('dbConnect.php');
   
   $db = get_db();

   $stmt = $db->prepare("SELECT id, username, pwd FROM user_hash WHERE username = $_SESSION['login'];");
   $stmt->execute();
   $user = $stmt->fetch(PDO::FETCH_ASSOC);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
    <title>stuff</title>
 </head>
 <body>
 
   <?php  
      echo "<h1>WELCOME $user['id']</h1>";
   ?>

 </body>
 </html>