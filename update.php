<?php
include 'db.php';

$id = $_POST['id'];
$course = $conn->real_escape_string($_POST['course']);
$professor = $conn->real_escape_string($_POST['professor']);

$sql = "UPDATE course SET id='$id', course='$course', professor='$professor' WHERE id=$id";
    echo "<pre>DEBUG: $sql</pre>";

if ($conn->query($sql) === TRUE) {
    echo "Employee updated successfully. <a href='index1.php'>Go back</a>";
} else {
    echo "Error updating employee: " . $conn->error;
}   
?>
