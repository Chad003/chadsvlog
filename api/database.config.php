<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
ini_set('log_errors', 1);
error_reporting(E_ALL);

function loadEnv($path)
{
    if (!file_exists($path))
        return;

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0)
            continue;

        list($name, $value) = explode('=', $line, 2);
        $_ENV[$name] = trim($value);
    }
}

loadEnv(__DIR__ . '/.env');

$host = $_ENV['DB_HOST'];
$db = $_ENV['DB_NAME'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASSWORD'];

try {
    $DB_CONNECTION = new PDO(
        "mysql:host=$host;dbname=$db;charset=utf8mb4",
        $user,
        $pass
    );

    // Optional but recommended settings
    $DB_CONNECTION->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $DB_CONNECTION->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("Database connection failed");
}

?>