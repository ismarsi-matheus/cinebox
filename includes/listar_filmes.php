<section id="filmes_recomendados">
    <h2 class="titulo">Filmes</h2>
    <main class="container">
        <div class="row">

            <?php foreach ($dadosFilme as $filme) {
                include './includes/filme_card.php';
            } ?>



        </div>
    </main>

</section>>