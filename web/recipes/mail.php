<?php
$msg = htmlspecialchars($_POST['message']);
$sub = htmlspecialchars($_POST['sub']);
$from = htmlspecialchars($_POST['from']);

mail("tburr35@yahoo.com", $sub, $msg, $from);

header("Location: contacts.php");
die();

?>