<?php session_start();


if (isset($_GET['tNome'])) {
    $_SESSION['lista_tarefas'][] = $_GET['tNome'];
}


if (array_key_exists('delete', $_GET)) {
    unset($_SESSION['lista_tarefas'][$_GET['delete']]);
}


if (isset($_GET['tNomeAtual'])) {
    $_SESSION['lista_tarefas'][$_GET['update']] = $_GET['tNomeAtual'];
}


include "template.php";