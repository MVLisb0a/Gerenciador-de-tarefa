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
            <legend>Atualizar tarefa</legend>

            <p>Tarefa:<br>
                <label>
                    <input type="text" name="tNomeAtual" class="formGeral" placeholder="Atualize os dados"
                           autocomplete="on" size="55"/>
                </label>
            </p>
            <p>

                <label>
                    <input type="hidden" name="update" value="<?php echo $_GET['update']; ?>">
                    <input type="submit" name="tCadastrar" class="cCadastrar" value="Atualizar">
                </label>
            </p>
        </fieldset>
    </form>

</div>

</body>
</html>