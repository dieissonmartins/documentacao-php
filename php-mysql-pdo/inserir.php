<?php

$servidor = "localhost";
$usuario  = "root";
$senha	  = "";
$banco   = "";


$conn = new mysqli($servidor, $usuario, $senha, $banco);


try {    
    //conecta banco de dados 
    $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "INSERT INTO usuario(nome, sobrenome, email)
    VALUES ('Dieisson', 'Martins dos Santos', 'dieisson.martins.santos@gmail.com')";
    
    $conn->exec($sql);
    echo "!Sucesso, Dado inserido...";
}
catch(PDOException $e){

    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>