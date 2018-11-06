<?php
$msg = htmlspecialchars($_POST['message']);
$sub = htmlspecialchars($_POST['sub']);
$from = "recipes@recipes.com";

mail("tburr35@yahoo.com", $sub, $msg, $from);

header("Location: contacts.php");
die();

?>