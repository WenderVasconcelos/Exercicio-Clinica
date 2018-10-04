<?php
include_once '../model/cao.php';


$c = new cao();

$c->categoria = $_POST['categoria'];
$c->rot       = $_POST['rot'];
$c->pit       = $_POST['pit'];
$c->qtd1      = $_POST['qtd1'];
$c->qtd2      = $_POST['qtd2'];
$c->senha     = $_POST['senha'];
$c->usuario   = $_POST['usuario'];


header('location:../view/respostaClinica.php?dados='.$c);