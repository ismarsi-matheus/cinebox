<?php 


require './classes/Filmes.php';
require './classes/Generos.php';

$titulo = '';
include './includes/header.php';



$filme = new Filmes();
$dadosFilmes = $filme->exibirlistaFilmes();


$bob = new Generos();
$dadosGeneros = $bob->consultarlistaGeneros();


include './includes/filmes_filtro.php';

include './includes/footer.php';