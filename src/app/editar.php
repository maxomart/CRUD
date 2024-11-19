<?php

$id = $_GET['id'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$coreo = $_GET['coreo'];   


require_once 'db.php';

$sql_editar = 'UPDATE usuarios SET nombre=?, apellido=?, coreo=? WHERE id = ?';
$sentencia = $pdo->prepare($sql_editar);
$sentencia->execute(array($nombre, $apellido, $coreo, $id)); 

header('location:index.php');

