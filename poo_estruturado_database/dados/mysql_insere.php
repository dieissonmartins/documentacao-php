<?php
//abre conexão com banco de dados Mysql
$conn = mysqli_connect('localhost','root','','livro');

//inseri varios regirtros 
mysqli_query($conn, "insert into famosos (codigo,nome) values(1,'Erico Verissimo')");
mysqli_query($conn, "insert into famosos (codigo,nome) values(2,'Dieisson Martins')");
mysqli_query($conn, "insert into famosos (codigo,nome) values(3,'Anitta Senna')");

//fecha conexão
mysqli_close($conn);
?>