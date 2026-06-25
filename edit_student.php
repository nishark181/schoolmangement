<?php
include 'db.php';

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();
?>

<h2>Edit Student</h2>

<form method="POST">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
    Class: <input type="text" name="class" value="<?php echo $row['class']; ?>"><br><br>
    Roll: <input type="text" name="roll" value="<?php echo $row['roll']; ?>"><br><br>
    Phone: <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br><br>
    <button type="submit" name="update">Update</button>
</form>

<?php
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $class = $_POST['class'];
    $roll = $_POST['roll'];
    $phone = $_POST['phone'];

    $conn->query("UPDATE students SET 
        name='$name',
        class='$class',
        roll='$roll',
        phone='$phone'
        WHERE id=$id");

    header("Location: view_students.php");
}
?>