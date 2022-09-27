<?php
    include '../conexao.php';
    if(is_numeric($_GET["id"])){
        $SQL = "DELETE FROM arthur_assis.livros WHERE id = ".$_GET["id"];
        if (pg_query($conn, $SQL) === TRUE) {
            echo "<script>alert('Registro excluído com sucesso!');</script>";
            echo "<script>window.location = 'indexl.html';</script>";
        }
        else{
            echo "<script>alert('Erro ao excluir o registro!');</script>";
            echo "<script>window.location = 'indexl.html';</script>";
        }
    }
?>
