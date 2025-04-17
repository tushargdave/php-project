<?php

include 'db.php';


$id = $_GET['id'];
$sql = "delete FROM course WHERE id = $id";
$result = $conn->query($sql);

//$sql = "delete from course WHERE id=$id";
    echo "<pre>DEBUG: $sql</pre>";

if ($conn->query($sql) === TRUE) {
    echo "Employee updated successfully. <a href='index1.php'>Go back</a>";
} else {
    echo "Error updating employee: " . $conn->error;
}   
?>
