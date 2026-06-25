<?php include 'db.php'; ?>

<h2>Students List</h2>

<table border="1" width="70%">
<tr>
    <th>Name</th>
    <th>Class</th>
    <th>Roll</th>
    <th>Phone</th>
    <th>Action</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM students");

while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['name']}</td>
        <td>{$row['class']}</td>
        <td>{$row['roll']}</td>
        <td>{$row['phone']}</td>
        <td>
            <a href='edit_student.php?id={$row['id']}'>Edit</a><br>
            <a href='delete_student.php?id={$row['id']}'>Delete</a>
        </td>
    </tr>";
}
?>

</table>