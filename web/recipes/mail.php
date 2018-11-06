<?php
$msg = htmlspecialchars($_POST['message']);
$sub = htmlspecialchars($_POST['sub']);

mail("tburr35@yahoo.com", $sub, $msg);

?>