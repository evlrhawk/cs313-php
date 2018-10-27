<?php

session_start();

$name = htmlspecialchars($_POST['food']);
$pic = htmlspecialchars($_POST['pic']);
$category = htmlspecialchars($_POST['cat']);
$recipe = htmlspecialchars($_POST['recipe']);

$newpage;

require('dbConnect.php');
$db = get_db();

$stmt = $db->prepare("INSERT INTO recipes(name, categories_id, pic, recipe) VALUES (:name, :category, :pic, :recipe)");
$stmt->bindValue(":name", $name, PDO::PARAM_STR);
$stmt->bindValue(":categories_id", $category, PDO::PARAM_INT);
$stmt->bindValue(":pic", $pic, PDO::PARAM_STR);
$stmt->bindValue(":recipe", $recipe, PDO::PARAM_STR);
$stmt->execute();

$newpage = "recipesSearch.php";

header("Location: $newpage");
die();

?>