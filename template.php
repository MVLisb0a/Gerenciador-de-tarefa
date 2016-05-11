<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Gerenciador de Tarefas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div>
    <h1>Gerenciador de Tarefas</h1>

    <form id="lista_tarefas" method="get" action="tarefa.php">
        <fieldset>
            <legend>Nova Tarefa</legend>

            <p>Tarefa:<br>
                <label>
                    <input type="text" name="tNome" class="formGeral" placeholder="Digite aqui a sua tarefa"
                           autocomplete="on" size="55"/>
                </label>
            </p>
            <p>
                <label>
                    <input type="submit" name="tCadastrar" class="cCadastrar" value="Cadastrar">
                </label>
            </p>


        </fieldset>
    </form>

    <br>

    <table>
        <tr>
            <td colspan="3" class="titulo"> Lista de Tarefa:</td>
        </tr>
        <?php foreach ($_SESSION['lista_tarefas'] as $chave => $tarefa): ?>
            <tr>
                <td><?php echo $tarefa; ?></td>
                <td><a href="?delete=<?php echo $chave; ?>">Delete</a></td>
                <td><a href="update.php?update=<?php echo $chave ?>">Update</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    
</div>

</body>
</html>