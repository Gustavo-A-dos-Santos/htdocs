<?php

require_once "../../vendors/Redirect/Redirect.php";
require_once "../../vendors/FlashMessage/FlashMessage.php";
require_once "../../models/UsuarioModel.php";

class UsuarioController
{

    private $model;

    function __construct()
    {
        $this->model = new UsuarioModel();
    }

    public function read()
    {
        return $this->model->read();
    }

    public function add(Usuario $c)
    {
        return $this->model->create($c);
    }

    public function edit(Usuario $c)
    {
        return $this->model->update($c);
    }

    public function editPassword(int $id, string $oldPassword, string $newPassword, string $confirmedPassword)
    {
        if ($newPassword === $confirmedPassword) {
            $user = $this->model->findId($id);
            if ($user->getSenha() == $oldPassword) {
                $user->setSenha($newPassword);
                FlashMessage::setMessage("A senha foi alterada!!", 1);
                return $this->model->updatePassword($user);
            }
            // Senha não confere com o banco
            FlashMessage::setMessage("A senha do banco não confere!!", 0);
            Redirect::refresh();
        }
        // Confirmação de senha errada
        FlashMessage::setMessage("A nova senha não confere!!", 0);
        Redirect::refresh();
    }

    public function findId($id)
    {
        return $this->model->findId($id);
    }

    public function remove($id)
    {
        return $this->model->delete($id);
    }
}
