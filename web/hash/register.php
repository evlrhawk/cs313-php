<?php

?>
<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>

<form action="create_user.php" method="post">
   <label for="user">Username:</label><br>
   <input type="text" name="user" required>

   <label for="pwd">Password:</label><br>
   <input type="password" name="pwd" required>

   <input type="Submit" name="submit" value="Create Account">
</form>

</body>
</html>