<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylea.css">
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
            <a href="indexa.html"><button>Menu dos alunos</button></a><br><br>
            <a href="../index.html"><button>Menu geral</button></a><br><br>
        </fieldset>
        <fieldset>
            <legend>Inserir novo aluno</legend>
            <form action="insertAluno.php" method="post">
                <label for="txtNome">Nome: </label>
                <input type="text" name="txtNome" required autofocus placeholder="Informe o nome"><br><br>                
                <label for="txtSobrenome">Sobrenome: </label>
                <input type="text" name="txtSobrenome" required placeholder="Informe a turma"><br><br>
                <label for="txtSala">Sala: </label>
                <input type="text" name="txtSala" required placeholder="Informe a turma"><br><br>
                <label for="txtTelefone2">Telefone: </label>
                <input type="text" name="txtTelefone2" required autofocus placeholder="Informe o telefone"><br><br>   
                <label for="txtEmail">Email: </label>
                <input type="text" name="txtEmail" required placeholder="Informe o email"><br><br><br>
                <input class="x" type="submit" name="btnSalvar" value="Salvar">
                <input class="x" style="margin-left: 5px;" type="reset" name="btnCancelar" value="Cancelar">
            </form>
        </fieldset>
    </div>
</body>

</html>