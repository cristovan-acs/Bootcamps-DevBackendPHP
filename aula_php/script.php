<?php
session_start();

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
   $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio';
    header('location: index.php');
    return;
}
else if(strlen($nome) < 3)
{   $_SESSION['mensagem-de-erro'] = 'O nome deve conter mais de 3 caracteres';
    header('location: index.php');
    return;
}
else if(strlen($nome) > 40)
{
    $_SESSION['mensagem-de-erro'] = 'O nome tem mais de 40 caracteres';
    header('location: index.php');
    return;
}
else if (!is_numeric($idade))
{
    $_SESSION['mensagem-de-erro'] = 'Informe um numero para idade';
    header('location: index.php');
    return;
}
if ($idade >= 1 && $idade <= 12)
{
    for($i = 0; $i <= count($categoria); $i++)
    {
        if($categoria[$i] == 'infantil')
        {
        $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome. " compete na categoria ".$categoria[$i];
        header('location: index.php');
        return;
        }
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i <= count($categoria); $i++)
    {
        if($categoria[$i] == 'adolescente')
        {
        $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome. " compete na categoria adolescente";
        header('location: index.php');
        return;
        }
    }
}
else
{
    for($i = 0; $i <= count($categoria); $i++)
    {
        if($categoria[$i] == 'adulto')
        {
        $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome. " compete na categoria adulto";
        header('location: index.php');
        return;
        }   
    }
}