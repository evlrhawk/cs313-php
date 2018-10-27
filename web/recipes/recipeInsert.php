<?php

session_start();

$name = htmlspecialchars($_POST['food']);
$pic = htmlspecialchars($_POST['pic']);
$category = htmlspecialchars($_POST['cat']);
$recipe = htmlspecialchars($_POST['recipe']);
$user_id = htmlspecialchars($_POST['id']);

$newpage;

require('dbConnect.php');
$db = get_db();

$stmt = $db->prepare("INSERT INTO recipes(user_id, name, categories_id, pic, recipe) VALUES ($user_id, :name, :category, :pic, :recipe)");
$stmt->bindValue(":name", $name, PDO::PARAM_STR);
$stmt->bindValue(":category", $category, PDO::PARAM_INT);
$stmt->bindValue(":pic", $pic, PDO::PARAM_STR);
$stmt->bindValue(":recipe", $recipe, PDO::PARAM_STR);
$stmt->execute();

$newpage = "recipesSearch.php";

header("Location: $newpage");
die();

?>