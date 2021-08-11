<?php

include_once 'Class/Single-Student.php'; // call to class to get all stundents as list
$reseult = new SingleStudent();
$all_result = $myRes = $reseult->getAllStudents();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculate Students Grades</title>
	<center><h1 style="font-size: 42px;">Studnets With Grades</h1><center>
	<center><ol style="list-style-position: inside; font-size: 32px;">
		<?php foreach ($all_result as $res):?><!--foreash hole database to get all students-->
		<li><a href="single_student_result.php/<?=$res->id;?>"><?=$res->name; ?></a></li><!--linking sudent to single page-->
	<?php endforeach ?>
	</ol></center>
</head>
<body>

</body>
</html>