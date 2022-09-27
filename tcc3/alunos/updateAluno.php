<?php
    include '../conexao.php';
    if (isset($_POST["txtNome"])) {
        $nome = $_POST["txtNome"];
        $sobrenome = $_POST["txtSobrenome"];
        $sala = $_POST["txtSala"];
        $telefone = $_POST["txtTelefone"];
        $email = $_POST["txtEmail"];
        if (empty($nome)) {
            echo "Preencha as informações corretamente.";
            exit;
        } else {
            $SQL = "UPDATE arthur_assis.alunos SET nome= '.$nome.', sobrenome = '.$sobrenome.', sala = '.$sala.', telefone= '.$telefone.', email= '.$email.' WHERE id = ".$_GET["id"];
            if (pg_query($conn, $SQL) === TRUE) {
                echo "<script>alert('Registro atualizado com sucesso.');</script>";
                echo "<script>window.location = 'indexl.php';</script>";
            } else {
                echo "<script>alert('Erro ao editar o registro.');</script>";
                echo "<script>window.location = 'updateLivro.php';</script>";
            }
        }
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
    <link rel="stylesheet" href="stylea.css">
    <style>
        button, .x{
            border-radius: 10px;
            font-size: 15px;
        }
        .y{
            margin-left: 7.5px;
        }
    </style>
</head>

<body>
    <?php
        if (isset($_GET["id"])) {
            if (is_numeric($_GET["id"])) {
                $SQL = "SELECT * FROM arthur_assis.alunos WHERE id = " . $_GET["id"];
                $executa = pg_query($conn, $SQL);
                $resultado = pg_fetch_assoc($executa);
    ?>
    <div class='divstyle'>
    <fieldset>
        <legend>Menu</legend>
        <a href="indexa.html"><button>Menu dos alunos</button></a><br><br>
        <a href="../index.html"><button>Menu geral</button></a><br><br>
    </fieldset>
    <fieldset>
        <legend>Atualizar aluno</legend>
        <form name="frm_Pessoa" method="POST" action="updateAluno.php?id=<?php echo $_GET["id"];?>">
            Nome:<input class="y" type="text" name="txtNome" required="required"
                value="<?php echo $resultado["nome"]; ?>" /><br>
            <br>
            Sobrenome:<input class="y" type="text" name="txtSobrenome" required="required"
                value="<?php echo $resultado["sobrenome"]; ?>" /><br>
            <br>
            Sala:<input class="y" type="text" name="txtSala" required="required"
                value="<?php echo $resultado["sala"]; ?>" /><br>
            <br>
            Telefone:<input class="y" type="text" name="txtTelefone" required="required"
                value="<?php echo $resultado["telefone"]; ?>" /><br>
            <br>
            Email:<input class="y" type="text" name="txtEmail" required="required"
                value="<?php echo $resultado["email"]; ?>" /><br>
            <br>
            <br>
            <input class="x" type="submit" value="Atualizar">
            <input class="x" class="y" style="margin-left: 5px;" type="reset" value="Limpar">
        </form>
    </fieldset>
    </div>
    <?php
            }
        }
    ?>
</body>
</html>