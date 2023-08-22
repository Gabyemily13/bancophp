<?php

try {
    $conectar = new PDO("sqlite:banco/banco_biblioteca.db");

    $sql = $conectar->prepare("INSERT INTO tb_livro 
        (titulo, autor, editora, ano de publicação, quantidade) 
        VALUES (:titulo, :autor, :editora, :ano de publicação, :quantidade)");

    $sql->bindParam(':titulo', $_POST['titulo']);
    $sql->bindParam(':autor', $_POST['autor']);
    $sql->bindParam(':editora', $_POST['editora']);
    $sql->bindParam(':ano de publicação', $_POST['ano de publicação']);
    $sql->bindParam(':quantidade', $_POST['quantidade']);
    
    $sql->execute();

    header('location: usuarios.php');
} catch (\Throwable $th) {
    echo "não OK";
}

?>