<?php

include "db.php";

$result = mysqli_query($conn,"SELECT * FROM people");

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['age']; ?></td>

<td><?php echo $row['status']; ?></td>

<td>

<button
class="toggle"
onclick="toggleStatus(<?php echo $row['id']; ?>)">
Toggle
</button>

</td>

</tr>

<?php
}
?>