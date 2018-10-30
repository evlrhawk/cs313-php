<?php
session_start();
require('dbConnect.php');

$user = htmlspecialchars($_POST['user']);
$pwd = htmlspecialchars($_POST['pwd']);

$db = get_db();

$stmt = $db->prepare("SELECT id, username, pwd FROM user_hash WHERE username = :username;");
$stmt->bindValue(":username", $username, PDO::PARAM_STR);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$passwordHash = $user['pwd'];

if (password_verify($pwd, $passwordHash )) {
   $newPage = "home.php";
   $_SESSION['login'] = $user['id'];
}
else{
   $newPage = "sign_in.php";
}

header("Location:$newpage");
die();


?>