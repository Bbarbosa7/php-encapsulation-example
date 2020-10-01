<?php
include_once "classes/staff.php";

$pedro = new staff();

$pedro->SetSalario(2000);

echo 'Salário de Pedro é de R$' . $pedro->GetSalario();