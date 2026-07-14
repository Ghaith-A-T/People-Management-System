<?php

include "db.php";

$name = $_POST['name'];
$age = $_POST['age'];

$sql = "INSERT INTO people(name, age, status)
VALUES('$name','$age',0)";

mysqli_query($conn,$sql);

?>