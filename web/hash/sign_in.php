<?php

?>
<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>

<form action="authenticate.php" method="post">
   <label for="user">Username:</label><br>
   <input type="text" name="user" required>

   <label for="pwd">Password:</label><br>
   <input type="password" name="pwd" required>

   <input type="Submit" name="submit" value="Login">
</form>

</body>
</html>