<?php

session_start();

session_unset();

$newpage = "recipes.php";

header("Location: $newpage");
die();

?>