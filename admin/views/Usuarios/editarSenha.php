<?php
require_once "../../controllers/UsuarioController.php";

$UsuarioController = new UsuarioController();

if (isset($_POST) && count($_POST)) {
    $c = new Usuario();
    $c->setId(htmlspecialchars($_POST['campoId']));
    $c->setNome(htmlspecialchars($_POST['campoSenha']));
    $res = $UsuarioController->edit($c);

    if ($res) {
        header("location: ./");
        exit();
    }
} else if (isset($_GET['id']) && !empty($_GET['id'])) {
    $dado = $UsuarioController->findId($_GET['id']);
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
                <h3>Cadastro de Senha</h3>
                <form action="" method="post">
                    <input type="hidden" name="campoId" value="<?= $dado->getId(); ?>">
                    <div>
                        <label for="idNome" class="form-label">Nome:<?= $dado->getNome(); ?></label>
                    </div>
                    <div>
                        <label for="idEmail" class="form-label">Email:<?= $dado->getEmail(); ?></label>
                    </div>
                    <div class="mb-3">
                        <label for="idSenha" class="form-label">Senha:</label>
                        <input type="text" class="form-control" name="campoSenha" id="idSenha" placeholder="Informe a Senha.">
                    </div>
                    <div class="mb-3">
                        <label for="idNewSenha" class="form-label">Nova senha:</label>
                        <input type="text" class="form-control" name="campoNewSenha" id="idNewSenha" placeholder="Informe a Nova Senha.">
                    </div>
                    <div class="mb-3">
                        <label for="idNewSenhaConf" class="form-label">Confirmar nova senha:</label>
                        <input type="text" class="form-control" name="campoNewSenhaConf" id="idNewSenhaConf" placeholder="Confirme a Nova Senha.">
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