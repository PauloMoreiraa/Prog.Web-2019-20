<?php

class Pessoa {
    private $nome;
    private $rg;
    private $cpf;
    
 
    public function setNome($nome){
        if( (strlen($nome) < 3 ) )
        throw new Exception("NOME INVÁLIDO") && header("location:index.php");
       
    else
        $this->nome = $nome;
    }
    public function getNome(){ return $this->nome; }
 
    public function setRg($rg){
        if( (strlen($rg) < 9 ) || (strlen($rg) > 12))
        throw new Exception("RG INVÁLIDO") && header("location:index.php");
       
    else
        $this->rg = $rg;
    }
    public function getRg(){ return $this->rg; }
 
    public function setCpf($cpf){
        if( (strlen($cpf) < 11 ) || (strlen($cpf) > 14))
        throw new Exception("CPF INVÁLIDO") && header("location:index.php");
        
    else
        $this->cpf = $cpf;
    }
    public function getCpf(){ return $this->cpf; }
    
    
    
}