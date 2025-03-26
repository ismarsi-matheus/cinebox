<?php

require './classes/Filmes.php';

$titulo = "";
include './includes/header.php';

$filmes = new Filmes();
    $dadosFilme = $filmes->exibirListaFilmes();



include './includes/listar_filmes.php';
include './includes/footer.php';