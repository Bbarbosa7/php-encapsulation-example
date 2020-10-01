<?php
include 'classes/staff.php';
include 'classes/trainee.php';

$pedrinho = new trainee();
$pedrinho->SetSalario(800);

echo 'O salário de Pedrinho é de R$: ' . $pedrinho->GetSalario() . "\n";