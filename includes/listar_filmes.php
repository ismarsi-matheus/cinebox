<section id="filmes-recomendados">
    <h2 class="titulo">filmes</h2>
    <main class="container ">
        <div class="row">


        <?php 
          foreach ($dadosFilmes as $value){

           $generoFilmes = $bob->consultarGeneroByIdfilme($value['id']);
           
          include './includes/filme_card.php';
        }?>


        </div>
    </main>
</section>