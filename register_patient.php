<?php
// register_patient.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'database.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sql = "CALL register_patient(:name, :email, :phone)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->execute();
    echo "Patient registered successfully!";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register Patient</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
<?php include 'header.php'; ?>

    <h1>Register Patient</h1>
    <form method="post" class="form-container">
        Name: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        Phone: <input type="text" name="phone" required><br>
        <input type="submit" value="Register">
    </form>
    <?php include 'footer.php'; ?>
</body>
</html>
