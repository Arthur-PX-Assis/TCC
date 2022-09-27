<?php
    include '../conexao.php';
    $nome = $_POST["txtNome"];
    $sobrenome = $_POST["txtSobrenome"];
    $sala = $_POST["txtSala"];
    $telefone = $_POST["txtTelefone"];
    $email = $_POST["txtEmail"];
    $sql = "INSERT INTO arthur_assis.alunos (nome, sobrenome, sala, telefone, email) VALUES ('$nome', '$sobrenome', '$sala', '$telefone', '$email')";
    if (pg_query($conn, $sql) === TRUE) {
        echo "<script>alert('Registro inserido com sucesso.');</script>";
        echo "<script>window.location = 'indexl.html';</script>";
    } else {
        echo "Erro: " . $sql . "<br>" .pg_last_error();
        echo "<script>window.history.back();</script>";
    }
    $conn->pg_close();
?>