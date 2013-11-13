<?php

class TipoImovel {

    private $nome;
    private $idtipo;
    private $bd;

    public function cadastroTipo() {
        $query = "insert into tipo(nome) values ('$this->nome')";
        $this->bd->query($query);
    }

    public function editaTipo($id) {
        $query = "update tipo set nome='$this->nome' where idtipo='$id'";
        $this->bd->query($query);
    }

    public function excluiTipo() {
        $query = "delete from tipo where idtipo='$this->id'";
        $this->bd->query($query);
    }

    public function encontraTipo($id) {
        $query = "select * from tipo where idtipo='$id'";
        foreach ($this->bd->query($query) as $obj) {
;
            $this->nome = $obj['nome'];
        }
    }

    public function __construct() {
        $dns = 'mysql:host=localhost; dbname=imobiliaria';
        $user='root';
        $pass ='root';
        $this->bd = new PDO($dns,$user,$pass);
        ;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }
}

?>
