<div class="col-lg-<?= isset($qntd) ? $qntd : 3 ?> col-md-6 col-sm-12">
    <a href="filmes-consultar.php?id=<?= $value['id'] ?>">
                <figure>
                    <img src="./assets/img/poster/<?=$value['poster']?>"
                        alt="poster do filme o poder da avatar o caminho da agua" class="foto-produto">
                    <figcaption>
                        <h4><?= $value['nome']?></h4>
                        <span class="preco"><?= $value['valor_ingresso']?></span>
                        <P class="descricao"><?= $value['descricao']?></P>
                    </figcaption>
                    <span class="genero">
                        <?php foreach ($generoFilmes as $value2) { ?>

                            <label style="background-color: #<?= $value2['cor'] ?>;"><?= $value2['nome'] ?></label>

                        <?php } ?>
                        
                    </span>
                </figure>
    </a>
</div>