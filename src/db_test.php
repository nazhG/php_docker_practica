<?php
$host = 'db'; // El nombre del servicio definido en docker-compose.yml
$dbname = 'testdb';
$user = 'user';
$password = 'password';

try {
    // Conectar a la base de datos
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Preparar y ejecutar la consulta
    $stmt = $pdo->query('SELECT * FROM Stack');
    
    // Obtener los datos
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Mostrar los datos
    foreach ($results as $row) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Value: " . $row['value'] . "<br>";
        echo "Next: " . $row['next'] . "<br><br>";
    }
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}