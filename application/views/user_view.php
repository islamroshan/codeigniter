<!DOCTYPE html>
<html>
<head>
	<title>User View</title>
</head>
<body>
<?php 

// echo $results;

foreach ($results as $object) {
	echo $object->username;
}

?>
</body>
</html>
