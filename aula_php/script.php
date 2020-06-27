<?php

//$categoria = []; **** Não funciona com meu navegador
$categoria;  
$categoria[] = 'infantil';
$categoria[] = 'adolescente';
$categoria[] = 'adulto';
$categoria[] = 'idoso';
//print_r($categoria);

$nome = $_POST['nome'];
$idade = $_POST['idade'];
//var_dump($nome);
//var_dump($idade);
//return 0;

if(empty($nome))
{
    echo 'O nome não pode ser vazio!';
    return;
}

if(strlen($nome) < 3)
{
    echo 'O nome deve conter mais de 3 caracteres!';
    return;
}

if(strlen($nome) > 40)
{
    echo "O nome e muito extenso!";
    return;
}

if(!is_numeric($idade))
{
    echo 'Informe um numero para idade!';
    return;
}

if ($idade >= 1 && $idade <= 12)
{
    for($i = 0; $i <= count($categoria); $i++)
    {
        if($categoria[$i] == 'infantil')
            //echo "O nadador ".$nome. " compete na categoria infantil"; 
            echo "O nadador ".$nome. " compete na categoria ".$categoria[$i];
    }
    //echo 'infantil';
}
else if($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i <= count($categoria); $i++)
    {
        if($categoria[$i] == 'adolescente')
            echo "O nadador ".$nome. " compete na categoria adolescente"; 
    }
    //echo 'adolescente';
}
else
{
    for($i = 0; $i <= count($categoria); $i++)
    {
        if($categoria[$i] == 'adulto')
            echo "O nadador ".$nome. " compete na categoria adulto"; 
    }
    //echo 'adulto';
}