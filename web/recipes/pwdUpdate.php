<?php  
require('dbConnect.php');
$db = get_db();

$stmt = $db->prepare("SELECT id, password FROM users");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $user) {
   $id = $user['id'];
   $pwd = $user['password'];
   $passwordHash = password_hash($pwd, PASSWORD_DEFAULT);
   $stmt = $db->prepare(" UPDATE users SET password = $passwordHash WHERE id = $id;");
   $stmt->execute();

}

?>

<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>

<?php  

   echo "<h1>Updated</h1>";

?>

</body>
</html>