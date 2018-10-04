<?php
   
   session_start();
?>

<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>
   
<?php
   
   if ($_SESSION["count"]) {
      $_SESSION["count"] = $SESSION["count"] + 1;
   }
   else{
      $_SESSION["count"] = 0;
   }
   

   echo "You have visited " . $_SESSION["count"] . " times.<br>";

?>   

</body>
</html>
