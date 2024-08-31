<?php
// add_doctor.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'database.php';
    $name = $_POST['name'];
    $specialization = $_POST['specialization'];
    $available_slots = $_POST['available_slots'];
    $sql = "CALL add_doctor(:name, :specialization, :available_slots)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':specialization', $specialization);
    $stmt->bindParam(':available_slots', $available_slots);
    $stmt->execute();
    echo "Doctor added successfully!";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Doctor</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
<?php include 'header.php'; ?>

<!-- Your PHP code -->



    <h1>Add Doctor</h1>
    <form method="post"  class="form-container">
        Name: <input type="text" name="name" required><br>
        Specialization: <input type="text" name="specialization" required><br>
        Available Slots: <input type="text" name="available_slots" required><br>
        <input type="submit" value="Add Doctor">
    </form>

    <?php include 'footer.php'; ?>
</body>
</html>
