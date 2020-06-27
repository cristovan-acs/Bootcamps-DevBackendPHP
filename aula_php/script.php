<?php

//$categoria = []; **** Não funciona
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

if ($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categoria); $i++)
    {
        if($categoria[$i] == 'infantil')
            echo "O nadador ".$nome. " compete na categoria infantil"; 
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