<?php

function conectarBD(){

    $list = 'mysql:host=localhost;dbname=test';
    $usuario = 'root';
    $contraseña = '';
    
    
    try{
        $pdo = new PDO($list, $usuario, $contraseña);
        
    }catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}



?>