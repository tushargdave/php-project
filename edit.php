<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM course WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows == 1):
    $row = $result->fetch_assoc();
    ?>

<h2>Edit Employee</h2>
<form method="post" action="update.php">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    ID: <input type="int" name="id" value="<?= htmlspecialchars($row['id']) ?>"><br><br>
    course: <input type="varchar" name="course" value="<?= htmlspecialchars($row['course']) ?>"><br><br>
    Position: <input type="varchar" name="professor" value="<?= htmlspecialchars($row['professor']) ?>"><br><br>
    <input type="submit" value="Update">
</form>

<?php
else:
    echo "Employee not found!";
endif;
?>
