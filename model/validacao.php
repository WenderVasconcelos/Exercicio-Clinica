<?php



class validacao {

    private $senha;
    private $usuario;
    
    function getSenha() {
        return $this->senha;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }
    
    function getUsuario() {
        return $this->usuario;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }
     
    function validaSenha() {
        if (strlen($this->senha) != 8) {
            return "<br>Coloque somente 8 caracteres em senha!";
        } else {
            header("location: ../view/clinica.php?"."&senha=".$this->senha."&usuario=".$this->usuario);
        }
    }
}