<?php
// schedule_appointment.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'database.php';
    $patient_id = $_POST['patient_id'];
    $doctor_id = $_POST['doctor_id'];
    $appointment_date = $_POST['appointment_date'];
    
    // Convert the appointment date to the format expected by Oracle
    $sql = "CALL schedule_appointment(:patient_id, :doctor_id, TO_DATE(:appointment_date, 'YYYY-MM-DD'))";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':patient_id', $patient_id);
    $stmt->bindParam(':doctor_id', $doctor_id);
    $stmt->bindParam(':appointment_date', $appointment_date);
    $stmt->execute();
    echo "Appointment scheduled successfully!";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Schedule Appointment</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
<?php include 'header.php'; ?>



    <h1>Schedule Appointment</h1>
    <form method="post">
        Patient ID: <input type="number" name="patient_id" required><br>
        Doctor ID: <input type="number" name="doctor_id" required><br>
        Appointment Date: <input type="date" name="appointment_date" required><br>
        <input type="submit" value="Schedule Appointment">
    </form>

    <?php include 'footer.php'; ?>
</body>
</html>
