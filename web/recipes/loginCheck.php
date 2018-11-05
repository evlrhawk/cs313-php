<?php

session_start();

$username = htmlspecialchars($_POST['username']);
$pwd = htmlspecialchars($_POST['pwd']);

require('dbConnect.php');
$db = get_db();

$stmt = $db->prepare("SELECT id, username, password FROM users WHERE username = :username;");
$stmt->bindValue(":username", $username, PDO::PARAM_STR);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$newpage;

if (password_verify($pwd, $user['password']) {
   $newpage = "recipes.php";
   $_SESSION["login"] = $user['id'];
}
else{
   $newpage = "login.php";
}

header("Location: $newpage");
die();

?>