<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylel.css">
    <style>
        button,    .x {
            border-radius: 10px;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <div class='divstyle'>
        <fieldset>
            <legend>Menu</legend>
            <a href="indexl.html"><button>Menu dos livros</button></a><br><br>
            <a href="../index.html"><button>Menu geral</button></a><br><br>
        </fieldset>
        <fieldset>
            <legend>Inserir novo livro</legend>
            <form action="insertLivro.php" method="post">
                <label for="txtNome">Nome: </label>
                <input type="text" name="txtNome" required autofocus placeholder="Informe o nome"><br><br>
                <label for="txtAutor">Autor: </label>
                <input type="text" name="txtAutor" required placeholder="Informe o autor"><br><br>
                <label for="txtEditora">Editora: </label>
                <input type="text" name="txtEditora" required placeholder="Informe a editora"><br><br>
                <label for="txtGenero">Gênero: </label>
                <input type="text" name="txtGenero" required placeholder="Informe o gênero"><br><br>
                <label for="numAno">Ano: </label>
                <input type="number" name="numAno" required placeholder="Informe o ano"><br><br><br>
                <input class="x" type="submit" name="btnSalvar" value="Salvar">
                <input class="x" style="margin-left: 5px;" type="reset" name="btnCancelar" value="Cancelar">
            </form>
        </fieldset>
    </div>
</body>

</html>