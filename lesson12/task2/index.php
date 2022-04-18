<?php
try {
    $conn = new PDO("mysql:host=localhost", "root", "vtldtlm007");
    echo "Database connection";
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}