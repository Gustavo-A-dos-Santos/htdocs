<?php

require_once "../../models/UsuarioModel.php";

class UsuarioController {

    private $model;

    function __construct()
    {
        $this->model = new UsuarioModel();
    }

    public function read() {
        return $this->model->read();
    }

    public function add(Usuario $c) {
        return $this->model->create($c);
    }

    public function edit(Usuario $c) {
        return $this->model->update($c);
    }
    public function editPass(string $oldPass, string $newPass, string $confirmnewPass, int $id) {
        return $this->model->updatePass($c);
    }

    public function findId($id) {
        return $this->model->findId($id);
    }

    public function remove($id) {
        return $this->model->delete($id);
    }

}