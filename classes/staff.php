<?php


class staff
{
    private $codigo;
    public $nome;
    private $nascimento;
    protected $salario;

    function SetSalario($salario){
        if (is_numeric($salario) && ($salario > 0)){
            $this->salario = $salario;
        }
    }

    function GetSalario(){
        return $this->salario;
    }
}