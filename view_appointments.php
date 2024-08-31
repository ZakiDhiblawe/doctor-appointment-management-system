<?php
// view_appointments.php
include 'database.php';

try {
    $sql = "SELECT * FROM v_appointments";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $appointments = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Appointments</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
<?php include 'header.php'; ?>



    <h1>View Appointments</h1>
    <table class="table">
        <tr>
            <th>Appointment ID</th>
            <th>Patient Name</th>
            <th>Doctor Name</th>
            <th>Appointment Date</th>
            <th>Status</th>
        </tr>
        <?php if (!empty($appointments)): ?>
            <?php foreach ($appointments as $appointment): ?>
                <tr>
                    <td><?php echo htmlspecialchars($appointment['APPOINTMENTID']); ?></td>
                    <td><?php echo htmlspecialchars($appointment['PATIENTNAME']); ?></td>
                    <td><?php echo htmlspecialchars($appointment['DOCTORNAME']); ?></td>
                    <td><?php echo htmlspecialchars($appointment['APPOINTMENTDATE']); ?></td>
                    <td><?php echo htmlspecialchars($appointment['STATUS']); ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">No appointments found.</td>
            </tr>
        <?php endif; ?>
    </table>


<?php include 'footer.php'; ?>

</body>
</html>
