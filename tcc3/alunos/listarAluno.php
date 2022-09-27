<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylea.css">
    <style>
        button,    .x {
            border-radius: 10px;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <div class="divstyle">
        <fieldset>
            <legend>Menu</legend>
            <a href="indexa.html"><button>Menu dos alunos</button></a><br><br>
            <a href="../index.html"><button>Menu geral</button></a><br><br>
        </fieldset>
        <fieldset>
            <legend>Alunos cadastrados</legend>
            <?php
            include '../conexao.php';
            $sql = "SELECT * FROM arthur_assis.alunos ORDER BY nome";
            $result = pg_query($conn, $sql);
            if ($result) {
        ?>
            <table border="1" style="border-collapse: collapse; border: 5px solid black;">
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Sala</th>    
                    <th>Telefone</th>
                    <th>Email</th>                
                    <th></th>
                    <th></th>
                </tr>
                <?php
                while ($exibir = pg_fetch_assoc($result)){
            ?>
                <tr>
                    <td><?php echo $exibir["id"] ?> </td>
                    <td><?php echo $exibir["nome"] ?> </td>
                    <td><?php echo $exibir["sobrenome"] ?> </td>
                    <td><?php echo $exibir["sala"] ?> </td>
                    <td><?php echo $exibir["telefone"] ?> </td>
                    <td><?php echo $exibir["email"] ?> </td>
                    <td><a href="updateAluno.php?id=<?php echo $exibir["id"] ?>"><button>Editar</button></a></td>
                    <td><a href="deleteAluno.php?id=<?php echo $exibir["id"] ?>"><button>Excluir</button></a></td>
                </tr>
                <?php
                }
            ?>
            </table>
            <?php
            }
            else {
                echo "Nenhum registro encontrado.";
            }
            pg_close();
        ?>
        </fieldset>
    </div>
</body>

</html>