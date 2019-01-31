

<?php

$diretorio = "uploads/";
echo $diretorio_arquivo = $diretorio . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$tipoArquivo = strtolower(pathinfo($diretorio_arquivo,PATHINFO_EXTENSION));

// Verifique se o arquivo de imagem é uma imagem real ou uma imagem falsa
if(isset($_POST["submit"])) {
 
    $checar = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
 
    if($checar !== false) {
        echo "Arquivo é uma imagem - " . $checar["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Arquivo não é uma imagem.";
        $uploadOk = 0;
    }
}

// Verifica se o arquivo já existe
if (file_exists($diretorio_arquivo)) {
    
    echo "Desculpe, o arquivo já existe.";
    $uploadOk = 0;
}

// Verifique o tamanho do arquivo
if ($_FILES["fileToUpload"]["size"] > 500000) {

    echo "Desculpe, seu arquivo é muito grande.";
    $uploadOk = 0;
}

// Permitir determinados formatos de arquivo
if($tipoArquivo != "jpg" && $tipoArquivo != "png" && $tipoArquivo != "jpeg" && $tipoArquivo != "gif" ) {
    
    echo "Desculpe, somente arquivos JPG, JPEG, PNG e GIF são permitidos.";
    $uploadOk = 0;
}

// Verifique se $uploadOk está definido como 0 por um erro
if ($uploadOk == 0) {
    
    echo "Desculpe, seu arquivo não foi enviado.";
}

// se tudo estiver ok, tente fazer o upload do arquivo
else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $diretorio_arquivo)) {
        echo "O Arquivo ". basename( $_FILES["fileToUpload"]["name"]). "foi enviado...";
    } else {
        echo "Desculpe, houve um erro ao enviar seu arquivo.";
    }
}
?>