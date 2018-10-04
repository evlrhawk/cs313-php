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

   $_SESSION["count"] = 0;

   echo "You have visited" . $_SESSION["count"] . "times.<br>";

?>   

</body>
</html>
