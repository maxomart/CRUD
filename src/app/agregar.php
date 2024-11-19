<?php

    require_once('db.php');

    $sql_leer = 'SELECT * FROM usuarios';
    $share = $pdo->prepare($sql_leer);
    $share->execute();
    $relsutado = $share->fetchAll();

/**Agregar */
    if($_POST)
    {
        $nombre =  $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $coreo = $_POST['coreo'];

        $sql_agregar = 'INSERT INTO usuarios (nombre, apellido, coreo) VALUES(?,?,?)';
        $SQL = $pdo->prepare($sql_agregar);
        $SQL->execute(array($nombre, $apellido, $coreo));

     }

     /**Actualizar */

     if($_GET)
     {
        $id = $_GET['id'];
        $sql_unico = 'SELECT * FROM usuarios WHERE id=?';
        $share_unico = $pdo->prepare($sql_unico);
        $share_unico->execute(array($id));
        $relsutado_unico = $share_unico->fetch();
     }

?>

