<?php
include './includes/header.php';


?>
<section id="usuario-principal">
    <main class="container usuario-principal">
        <?php
        include_once './includes/user_header.php';
        include_once './includes/user_lista_filmes.php';

        ?>
    </main>
</section>
<?php
// Configurações de conexão com o banco de dados
$dsn = 'mysql:dbname=db_cinebox;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    // Conecta ao banco de dados
    $banco = new PDO($dsn, $user, $password);
    $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Ativa o modo de exceção para erros
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}

// Consulta para buscar todos os filmes da tabela tb_filmes
$select = "SELECT * FROM tb_filmes";
$resultado = $banco->query($select);

// Verifica se há filmes cadastrados
if ($resultado->rowCount() > 0) {
    // Loop para exibir cada filme
    foreach ($resultado as $filme) {
        ?>
        <div class="row desc-filme">

            <div class="col-12 col-lg-2 col-sm-12 col-md-12 text-center">
                <img src="<?= htmlspecialchars($filme['img']) ?>" alt="<?= htmlspecialchars($filme['titulo']) ?>" class="desc-foto">
            </div>

            <div class="col-12 col-lg-8 col-sm-12 col-md-12 mt-3">
                <h3 class="title"><?= htmlspecialchars($filme['titulo']) ?></h3>
                <p class="desc-descricao">
                    <?= htmlspecialchars($filme['descricao']) ?>
                </p>
            </div>

            <div class="col-12 col-lg-2 col-sm-12 col-md-12 desc-btn p-3">
                <a href="editar_filme.php?id=<?= $filme['id'] ?>" class="btn btn-primary">
                    <i class="bi bi-pencil-square"></i>
                    Editar
                </a>
                <a href="excluir_filme.php?id=<?= $filme['id'] ?>" class="btn btn-danger">
                    <i class="bi bi-trash-fill"></i>
                    Excluir
                </a>
            </div>

        </div>
        <?php
    }
} else {
    // Mensagem caso não haja filmes cadastrados
    echo "<p class='text-center'>Nenhum filme cadastrado.</p>";
}
?>


<?php

include './includes/footer.php';
