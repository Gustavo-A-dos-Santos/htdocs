<?php
    require_once "../../controllers/JogosController.php";

    $JogosController = new JogosController();

    if(isset($_POST) && count($_POST)){
        $c = new Jogo();
        $c->setId(htmlspecialchars($_POST['campoId']));
        $c->setJogo(htmlspecialchars($_POST['campoJogo']));
        $c->setNumeroIntegrantes(htmlspecialchars($_POST['campoNumeroIntegrantes']));
        $c->setRegras(htmlspecialchars($_POST['campoRegras']));

        $res = $JogosController->edit($c);

        if($res){
            header("location: ./");
            exit();
        }
    }
    else if(isset($_GET['id']) && !empty($_GET['id'])){
        $dado = $JogosController->findId($_GET['id']);
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
                <h3>Editar Jogo</h3>
                <form action="" method="post">
                    <input type="hidden" name="campoId" value="<?= $dado->getId(); ?>">
                    <div class="mb-3">
                        <label for="idJogo" class="form-label">Jogo:</label>
                        <input type="text" value="<?= $dado->getJogo(); ?>" class="form-control" name="campoJogo" id="idJogo" placeholder="Informe a categoria">
                    </div>
                    <div class="mb-3">
                        <label for="idNumeroIntegrantes" class="form-label">Número Integrantes:</label>
                        <input type="number" value="<?= $dado->getNumeroIntegrantes(); ?>" class="form-control" name="campoNumeroIntegrantes" id="idJogo" placeholder="Informe o número de integrantes">
                    </div>
                    <div class="mt-3 mb-3">
                        <label for="idRegras" class="form-label">Regras:</label>
                        <textarea class="form-control" id="idRegras" name="campoRegras" placeholder="Insira as regras"><?= $dado->getRegras(); ?></textarea>
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