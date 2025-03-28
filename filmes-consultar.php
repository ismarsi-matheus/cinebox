<?php
require './classes/Filmes.php';
require './classes/Generos.php';

include './includes/header.php';


if (isset($_GET['id']) && !empty($_GET['id'])) {
    $filmes = new Filmes();
    $generos = new Generos();

    $dados = $filmes->consultarFilmesById($_GET['id']);
    $dadosGeneros = $generos->consultarGeneroByIdFilme($_GET['id']);



    include './includes/filmes_detalhe.php';
} else {
    header('location:index.php');
}

include_once './includes/footer.php'

?>