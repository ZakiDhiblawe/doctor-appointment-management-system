<?php
// database.php
try {
    $conn = new PDO('oci:dbname=//localhost:1521/xe', 'system', 'zaki12');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
