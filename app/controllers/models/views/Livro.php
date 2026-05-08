<?php

class Livro
{
    private $id;
    private $titulo;
    private $ano;
    private $generoId;
    private $generoNome;
    private $quantidade;
    private $statusLivro;

    // Métodos Get e Set
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id !== null ? (int) $id : null;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($titulo)
    {
        $this->titulo = trim((string)$titulo);
    }

    public function getAno()
    {
        return $this->ano;
    }
    public function setAno($ano)
    {
        $this->ano = (int)$ano;
    }

    public function getGeneroId()
    {
        return $this->generoId;
    }
    public function setGeneroId($generoId)
    {
        $this->generoId = (int)$generoId;
    }
    public function getGeneroNome()
    {
        return $this->generoNome;
    }
    public function setGeneroNome($generoNome)
    {
        $this->generoNome = trim((string)$generoNome);
    }

    public function getQuantidade()
    {
        return $this->getQuantidade();
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = (int)$quantidade;
    }

    public function getStatusLivro()
    {
        return $this->statusLivro;
    }
    public function setStatusLivro($statusLivro)
    {
        $this->statusLivro = $statusLivro === 'inativo' ? 'inativo' : 'ativo';
    }

    //Métodos Gerais
    public static function fromArray($dados)
    {
        $livro = new self();
        $livro->setId($dados['id'] ?? null);
        $livro->setTitulo($dados['titulo']  ?? '');
        $livro->setAno($dados['ano'] ?? '');
        $livro->setGeneroId($dados['genero_id'] ?? '');
        $livro->setGeneroNome($dados['genero_nome'] ?? '');
        $livro->setQuantidade($dados['quantidade'] ?? '');
        $livro->setStatusLivro($dados['status_livro'] ?? '');

        return $livro;
    }
}
