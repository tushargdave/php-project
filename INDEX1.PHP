<?php include 'db.php'; ?>

<h2>Employee Records</h2>
<table border="1" cellpadding="10">
<tr>
    <th>ID1</th><th>COURSE</th><th>PROFESSOR</th>
</tr>

<?php
$sql = "SELECT * FROM COURSE";
$result = $conn->query($sql);

if ($result->num_rows > 0):
            while($row = $result->fetch_assoc()):
        ?>
            <tr>
                <td><?= htmlspecialchars($row['id']) ?></td>
                <td><?= htmlspecialchars($row['course']) ?></td>
                <td><?= htmlspecialchars($row['professor']) ?></td>
                <td><a href="edit.php?id=<?= $row['id'] ?>"><button>Edit</button></a></td>
                <td><a href="delete.php?id=<?= $row['id'] ?>"><button>Delete</button></a></td>
            </tr>
        <?php endwhile; 
else: ?>
    <tr><td colspan="5">No records found</td></tr>
<?php endif; ?>

</table>
