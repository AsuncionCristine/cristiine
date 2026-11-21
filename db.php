<?php
// The database is ONLY used to save messages from the contact form.
// Your page text is typed directly in each page file (index.php, about.php, ...).
$DB_HOST = '127.0.0.1';
$DB_NAME = 'portfolio';
$DB_USER = 'root';   // XAMPP default
$DB_PASS = '';       // XAMPP default is empty

$pdo = null;
try {
    $pdo = new PDO(
        "mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4",
        $DB_USER,
        $DB_PASS,
        [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_TIMEOUT            => 3,   // do not wait forever if MySQL is off
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (PDOException $ex) {
    $pdo = null;   // the site still works; only sending messages will fail
}
