<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
   <title>"Prime" Beef Cuts</title>
</head>
<body>
   <div class="header">
      <h1>Beef cuts</h1>
   </div>
   <div class="flex">
      <form action="addCart.php" method="post">
         <div class="flex2">
            <h4>Chuck</h4>
         </div>
         <div class="flex2">
            <h4>Rib</h4>
         </div>
         <div class="flex2">
            <h4>Loin</h4>
         </div>
         <div class="flex2">
            <h4>Sirloin</h4>
         </div>

         <input type="submit" name="" value="View Cart">
      </form>
   </div>

</body>
</html>

