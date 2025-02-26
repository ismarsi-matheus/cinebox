<?php

$dsn = 'mysql:dbname=db_cine_box;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$select = "SELECT * FROM tb_filmes";

$resultado = $banco->query($select)->fetchAll();

?>


<?php foreach($resultado as $linha) {?>
        
    <div class="row desc-filme">

        <div class="col-12 col-lg-2 col-sm-12 col-md-12 text-center">
            <img src="./assets/img/poster/<?=$linha['poster'] ?>" alt="" class="desc-foto">
        </div>

        <div class="col-12 col-lg-8 col-sm-12 col-md-12 mt-3">
            <h3 class="title"> <?=$linha['nome']?></h3>
            <p class="desc-descricao">
            <?= $linha['descricao'] ?>
        </p>
        </div>

        <div class="col-12 col-lg-2 col-sm-12 col-md-12 desc-btn p-3">
            <a href="#" class="btn btn-primary">
                <i class="bi bi-pencil-square"></i>
                Editar
            </a>
            <a href="#" class="btn btn-danger">
                <i class="bi bi-trash-fill"></i>
                Excluir
            </a>
        </div>

    </div>



        <?php } ?>