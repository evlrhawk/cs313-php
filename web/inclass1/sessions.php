<?php
   
   session_start();


   if (isset($_SESSION["count"])) {
      $_SESSION["count"]++;
   }
   else{
      $_SESSION["count"] = 1;
   }
   
?>

<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>
   
<?php


   echo "You have visited " . $_SESSION["count"] . " times.<br>";

?>   

</body>
</html>
