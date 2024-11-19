<?php

require_once('db.php');

$id = $_GET['id'];


$sql_delete = 'DELETE FROM usuarios WHERE id=?';
$sentencia_del = $pdo->prepare($sql_delete);
$sentencia_del->execute([$id]);

header('location:index.php');

?>
