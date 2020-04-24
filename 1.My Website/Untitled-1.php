<!DOCTYPE html>
<html>
<body>
<p> add this words!</p>
<?php
	$cars=array(
	  array("Volve",33,20),
	  array("BMW",17,15),
	  array("Saab",5,1),
	  array("Land Rover",15,11),
	);
	for($row=0;$row<4;$row++){
		echo "<p><b>行数 $row</b><p>";
		echo "<ul>";
		for($col=0;$col<3;$col++){
			echo "<li>".$cars[$row][$col]."</li>";
		}
		echo "</ul>";
	}
?>
</body>
</html>