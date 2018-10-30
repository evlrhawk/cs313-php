<?php
session_start();
require('dbConnect.php');

$user = htmlspecialchars($_POST['user']);
$pwd = htmlspecialchars($_POST['pwd']);

$passwordHash = password_hash($pwd, PASSWORD_DEFAULT);

$newPage = 'sign_in.php';

$db = get_db();

$stmt = $db->prepare("INSERT INTO user_hash (username, pwd) VALUES (:user, :pwd);");
$stmt->bindValue(":user", $user, PDO::PARAM_STR);
$stmt->bindValue(":pwd", $passwordHash, PDO::PARAM_STR);
$stmt->execute();

header("Location:$newpage");
die();


?>