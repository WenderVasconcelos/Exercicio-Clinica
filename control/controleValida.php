<?php

include_once '../model/validacao.php';
$v = new validacao();
$v->setSenha($_GET['senha']);
$v->setUsuario($_GET['usuario']);
echo $v->validaSenha();
