<?php
require_once "../../controllers/FilmeController.php";

$FilmeController = new FilmeController();

if (isset($_POST) && count($_POST)) {
    $c = new Filme();
    $c->setId(htmlspecialchars($_POST['campoId']));
    $c->setGenero(htmlspecialchars($_POST['campoGenero']));
    $c->setFilme(htmlspecialchars($_POST['campoFilme']));
    $c->setDescricao(htmlspecialchars($_POST['campoDescricao']));
    $c->setDiretor(htmlspecialchars($_POST['campoDiretor']));
    $c->setDuracao(htmlspecialchars($_POST['campoDuracao']));
    $c->setEstudante(htmlspecialchars($_POST['campoEstudante']));

    $res = $FilmeController->edit($c);

    if ($res) {
        header("location: ./");
        exit();
    }
} else if (isset($_GET['id']) && !empty($_GET['id'])) {
    $dado = $FilmeController->findId($_GET['id']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../includes/head.php"; ?>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <?php include "../includes/menu.php"; ?>
            <div class="col-9">
                <h3>Cadastro de Filmes</h3>
                <form action="" method="post">
                    <input type="hidden" name="campoId" value="<?= $dado->getId(); ?>">
                    <div class="mb-3">
                        <label for="idGenero" class="form-label">Genero:</label>
                        <input type="text" value="<?= $dado->getGenero() ?>" class="form-control" name="campoGenero" id="idGenero" placeholder="Informe o genero.">
                    </div>
                    <div class="mb-3">
                        <label for="idFilme" class="form-label">Filme:</label>
                        <input type="text" value="<?= $dado->getFilme() ?>" class="form-control" name="campoFilme" id="idFilme" placeholder="Informe o filme.">
                    </div>
                    <div class="mb-3">
                        <label for="idDiretor" class="form-label">Diretor:</label>
                        <input type="text" value="<?= $dado->getDiretor() ?>" class="form-control" name="campoDiretor" id="idDiretor" placeholder="Informe o diretor.">
                    </div>
                    <div class="mb-3">
                        <label for="idDuracao" class="form-label">Duração:</label>
                        <input type="text" value="<?= $dado->getDuracao() ?>" class="form-control" name="campoDuracao" id="idDuracao" placeholder="Informe a duração.">
                    </div>
                    <div class="mb-3">
                        <label for="idEstudante" class="form-label">Estudante:</label>
                        <input type="text" value="<?= $dado->getEstudante() ?>" class="form-control" name="campoEstudante" id="idEstudante" placeholder="Informe o estudante.">
                    </div>
                    <div class="mt-3 mb-3">
                        <label for="idDescricao" class="form-label">Descrição</label>
                        <textarea class="form-control" id="idDescricao" name="campoDescricao" placeholder="Insira uma descrição"><?= $dado->getDescricao() ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Gravar</button>
                    <a href="./" class="btn btn-primary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
    <?php include "../includes/js.php"; ?>
</body>

</html>