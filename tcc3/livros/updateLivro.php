<?php
    include '../conexao.php';
    if (isset($_POST["txtNome"])) {
        $nome = $_POST["txtNome"];
        $autor = $_POST["txtAutor"];
        $editora = $_POST["txtEditora"];
        $genero = $_POST["txtGenero"];
        $ano = $_POST["numAno"];
        if (empty($nome)) {
            echo "Preencha as informações corretamente.";
            exit;
        } else {
            $SQL = "UPDATE arthur_assis.livros SET nome= '.$nome.', autor = '.$autor.', editora = '.$editora.', genero='.$genero.', ano= '.$ano.' WHERE id = ".$_GET["id"];
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
                $SQL = "SELECT * FROM arthur_assis.livros WHERE id = " . $_GET["id"];
                $executa = pg_query($conn, $SQL);
                $resultado = pg_fetch_assoc($executa);
    ?>
    <div class='divstyle'>
    <fieldset>
        <legend>Menu</legend>
        <a href="indexl.html"><button>Menu dos livros</button></a><br><br>
        <a href="../index.html"><button>Menu geral</button></a><br><br>
    </fieldset>
    <fieldset>
        <legend>Atualizar livro</legend>
        <form name="frm_Pessoa" method="POST" action="updateLivro.php?id=<?php echo $_GET["id"];?>">
            Nome:<input class="y" type="text" name="txtNome" required="required"
                value="<?php echo $resultado["nome"]; ?>" /><br>
            <br>
            Autor:<input class="y" type="text" name="txtAutor" required="required"
                value="<?php echo $resultado["autor"]; ?>" /><br>
            <br>
            Editora:<input class="y" type="text" name="txtEditora" required="required"
                value="<?php echo $resultado["editora"]; ?>" /><br>
            <br>
            Gênero:<input class="y" type="text" name="txtGenero" required="required"
                value="<?php echo $resultado["genero"]; ?>" /><br>
            <br>
            Ano:<input class="y" type="number" name="numAno" required="required"
                value="<?php echo $resultado["ano"]; ?>" /><br>
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