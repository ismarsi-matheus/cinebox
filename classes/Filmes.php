<?php
class Filmes
{
    public $conexaoBanco;

    public function __construct()
    {

        $dsn = 'mysql:dbname=db_cinebox;host=127.0.0.1';
        $user = 'root';
        $password = '';


        $this->conexaoBanco = new PDO($dsn, $user, $password);
    }


    public function exibirlistaFilmes($limite = '')
    {
        $auxScript = '';





        if (!empty($limite)) {

            $auxScript = " ORDER BY RAND() LIMIT {$limite}";
        }


        $script = 'SELECT * FROM tb_filmes' . $auxScript;

        return $this->conexaoBanco->query($script)->fetchAll();
    }

    public function consultarFilmesById($id_filme) {

        $script = "SELECT * FROM tb_filmes WHERE id = {$id_filme}";

        return $this->conexaoBanco->query($script)->fetch();
    }
}
