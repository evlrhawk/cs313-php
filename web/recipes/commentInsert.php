<?php

session_start();

$rating = htmlspecialchars($_POST['rating']);
$comment = htmlspecialchars($_POST['comment']);
$user_id = htmlspecialchars($_POST['id']);
$recipe_id = htmlspecialchars($_POST['recipe_id']);

$newpage;

require('dbConnect.php');
$db = get_db();

$stmt = $db->prepare("INSERT INTO comments(user_id, rating, comment, recipes_id) VALUES ($user_id, :rating, :comment, :recipe_id)");
$stmt->bindValue(":rating", $rating, PDO::PARAM_INT);
$stmt->bindValue(":recipe_id", $recipe_id, PDO::PARAM_INT);
$stmt->bindValue(":comment", $comment, PDO::PARAM_STR);
$stmt->execute();

$newpage = "recipes1.php?id=$recipe_id";

header("Location: $newpage");
die();

?>