<?php include 'db.php'; ?>

<h2>Add Student</h2>

<form method="POST">
    <input type="text" name="name" placeholder="Name"><br><br>
    <input type="text" name="class" placeholder="Class"><br><br>
    <input type="text" name="roll" placeholder="Roll"><br><br>
    <input type="text" name="phone" placeholder="Phone"><br><br>
    <button type="submit" name="save">Save</button>
</form>

<?php
if(isset($_POST['save'])) {
    $conn->query("INSERT INTO students(name,class,roll,phone)
    VALUES('$_POST[name]','$_POST[class]','$_POST[roll]','$_POST[phone]')");

    header("Location: view_students.php");
    exit();
}
?>