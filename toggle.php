<?php

include "db.php";

$id = $_POST['id'];

$result = mysqli_query($conn,"SELECT status FROM people WHERE id=$id");

$row = mysqli_fetch_assoc($result);

$newStatus = ($row['status'] == 0) ? 1 : 0;

mysqli_query($conn,
"UPDATE people SET status=$newStatus WHERE id=$id");

?>