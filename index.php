<?php
require './classes/Filmes.php';
require './classes/Generos.php';

$titulo = 'CineBox - Início';
include './includes/header.php';
include './includes/banner.php';

$filmes = new Filmes();
$dadosFilmes = $filmes -> exibirListaFilmes(24);

$bob = new Generos();
$dadosGeneros = $bob->consultarlistaGeneros();

include './includes/listar_filmes.php';

include './includes/footer.php';