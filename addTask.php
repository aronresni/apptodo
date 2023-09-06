<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=apptodo", "root", "tu_contraseña");
    echo "Conexion establecida<br>";
    
    // Consulta SQL para seleccionar todos los registros de la tabla 'tareas'
    $sql = "SELECT * FROM tareas";
    
    // Ejecutar la consulta
    $resultados = $conn->query($sql);
    
    if ($resultados) {
        foreach ($resultados as $fila) {
            echo "ID: " . $fila['id'] . "<br>";
            echo "Tarea: " . $fila['tarea'] . "<br>";
            echo "<hr>";
        }
    } else {
        echo "Error en la consulta: " . $conn->errorInfo()[2];
    }
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

?>
