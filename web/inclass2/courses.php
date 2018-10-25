<?php
require('dbConnect.php');

$db = get_db();

$query = 'SELECT id, code, name FROM course';
$stmt = $db->prepare($query);
$stmt->execute();
$courses = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
   <title>Courses</title>
</head>
<body>

<h1>Courses</h1>

<ul>
   
   <?php
      foreach ($courses as $course) {
         $name = $course['name'];
         $code = $course['code'];
         $id = $course['id'];

         echo "<li><a href='notes.php?id=";
         echo "$id";
         echo "'>$code - $name</p></li>\n";
      }
   ?>

</ul>

</body>
</html>