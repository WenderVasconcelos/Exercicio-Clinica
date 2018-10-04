<?php

class cao {
    private $categoria;
    private $pit;
    private $rot;
    private $qtd1; 
    private $qtd2;
    private $senha;
    private $usuario;
    
    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name=$value;
    }
    
    public function getSenha() {
        return $this->senha;
    }
    
    function getUsuario() {
        return $this->usuario;
    }
    

    public function checkPit(){
        if(isset($_POST["pit"])){
            return ($this->$pit=50 * ($this->qtd1 = $_POST["qtd1"]));
        }
    }
  
    public function checkRot(){
        if(isset($_POST["rot"])){
           return ($this->$rot=60 * ($this->qtd2 = $_POST["qtd2"]));
        }
    }
  
    private function validaQtd1(){
        if(isset($_POST["pit"])){
            return $this->qtd1;
        }
    }
    
    private function validaQtd2(){
        if(isset($_POST["rot"])){
            return $this->qtd2;
        }
    }

        public function categoria(){
        if($this->categoria = "Exame"){
            return;
    }else { 
            return ($this->categoria = "Consulta");
    }
    }
    
    public function valor(){
        if($this->pit){
            return $this->categoria() ;
    }{
        return $this->categoria();
    }
    }
    
    public function __toString() {
        return  "<br/>Usuario: ".$this->usuario.
                "<br/>Opção: ".$this->categoria.
                "<br/>Raça: ".$this->pit." - ".$this->rot.
                "<br/>Quantidade: ".($this->validaQtd1() + $this->validaQtd2()).
                "<br>Valor Total: R$ ".($this->checkPit() + $this->checkRot());
    }

}
