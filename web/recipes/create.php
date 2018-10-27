<?php

session_start();

$username = htmlspecialchars($_POST['username']);
$pwd = htmlspecialchars($_POST['pwd']);
$newpage;

require('dbConnect.php');
$db = get_db();

$stmt = $db->prepare("SELECT username FROM users WHERE username = :username;");
$stmt->bindValue(":username", $username, PDO::PARAM_STR);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (isset($user['username'])) {
   $newpage = "login.php";
}
else{
$stmt = $db->prepare("INSERT INTO users(username, password) VALUES (:user, :pwd)");
$stmt->bindValue(":user", $username, PDO::PARAM_STR);
$stmt->bindValue(":pwd", $pwd, PDO::PARAM_STR);
$stmt->execute();

$newpage = "recipes.php";

 $newId = $db->lastInsertId('users_id_seq');
 $_SESSION["login"] = $newId
}

header("Location: $newpage");
die();

?>