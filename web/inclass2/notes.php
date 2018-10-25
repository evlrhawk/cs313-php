<?php
require('dbConnect.php');

$db = get_db();

$course_id = htmlspecialchars($_GET['id']);

$query = 'Select c.code, c.name, n.content, n.id AS note_id FROM note n JOIN course c ON c.id = n.course_id WHERE course_id = :course_id';
$stmt = $db->prepare($query);
$stmt->bindValue(":course_id", $course_id, PDO::PARAM_INT);
$stmt->execute();
$courses = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
   <title>Course Notes</title>
</head>
<body>

<h1>Notese for: <?php echo "course_code - $course_name"; ?></h1>

<?php

   foreach ($notes as $note) {
      $content = $note['content'];

      echo "<p>$content</p>";
   }

?>

</body>
</html>