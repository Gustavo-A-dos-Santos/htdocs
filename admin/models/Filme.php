<?php

class Filme
{
    private int $id;
    private string $genero;
    private string $filme;
    private string $descricao;
    private string $diretor;
    private string $duracao;
    private string $estudante;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     */ 
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get the value of genero
     */ 
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     *
     */ 
    public function setGenero($genero)
    {
        $this->genero = $genero;

    }
    

    /**
     * Get the value of filme
     */ 
    public function getFilme()
    {
        return $this->filme;
    }

    /**
     * Set the value of filme
     *
     */ 
    public function setFilme($filme)
    {
        $this->filme = $filme;

    }

    /**
     * Get the value of descricao
     */ 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     */ 
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

    }

    /**
     * Get the value of diretor
     */ 
    public function getDiretor()
    {
        return $this->diretor;
    }

    /**
     * Set the value of diretor
     *
     */ 
    public function setDiretor($diretor)
    {
        $this->diretor = $diretor;

    }

    /**
     * Get the value of duracao
     */ 
    public function getDuracao()
    {
        return $this->duracao;
    }

    /**
     * Set the value of duracao
     *
     */ 
    public function setDuracao($duracao)
    {
        $this->duracao = $duracao;

    }

    /**
     * Get the value of estudante
     */ 
    public function getEstudante()
    {
        return $this->estudante;
    }

    /**
     * Set the value of estudante
     *
     */ 
    public function setEstudante($estudante)
    {
        $this->estudante = $estudante;

    }
}
