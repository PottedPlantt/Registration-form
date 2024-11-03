<?php
$DB_servername = "localhost";
$DB_username = "root";
$DB_password = "";
$DB_dbname = "Registration_Form";

try {
    $db = new PDO("mysql:host=$DB_servername;dbname=$DB_dbname", $DB_username, $DB_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>