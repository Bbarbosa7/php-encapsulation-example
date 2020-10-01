<?php


class trainee extends staff
{
    function GetSalario()
    {
        return $this->salario * 1.12;
    }
}