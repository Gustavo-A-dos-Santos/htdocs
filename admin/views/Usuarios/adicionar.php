<?php
    if(isset($_POST) && count($_POST)){
        require_once "../../controllers/UsuarioController.php";

        $c = new Usuario();
        $c->setNome(htmlspecialchars($_POST['campoNome']));
        $c->setEmail(htmlspecialchars($_POST['campoEmail']));
        $c->setSenha(md5($_POST['campoSenha']));
        $c->setTelefone(htmlspecialchars($_POST['campoTelefone']));

        $UsuarioController = new UsuarioController();
        $res = $UsuarioController->add($c);

        if($res){
            header("location: ./");
            exit();
        }
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
                <h3>Cadastro de Usuario</h3>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="idNome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" name="campoNome" id="idNome" placeholder="Informe o Nome.">
                    </div>
                    <div class="mb-3">
                        <label for="idEmail" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="campoEmail" id="idEmail" placeholder="Informe o Email.">
                    </div>
                    <div class="mb-3">
                        <label for="idSenha" class="form-label">Senha:</label>
                        <input type="text" class="form-control" name="campoSenha" id="idSenha" placeholder="Informe a Senha.">
                    </div>
                    <div class="mb-3">
                        <label for="idTelefone" class="form-label">Telefone:</label>
                        <input type="text" class="form-control" name="campoTelefone" id="idTelefone" placeholder="Informe o Telefone.">
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