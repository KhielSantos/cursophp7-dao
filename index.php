<?php

require_once("config.php");

//Busca um Usuario
// $root = new Usuario();
// $root->loadById(3);
// echo $root;

//Busca uma lista de usuario
// $lista = Usuario::getList();
// echo json_encode($lista);

//Busca uma lista pelo login
// $search = Usuario::search("roo");
// echo json_encode($search);

//Carrega usuario por login e senha
// $usuario = new Usuario();
// $usuario->login("root", "654321");

// echo $usuario;

/*
//Inserir um novo usuario
$aluno = new Usuario("Maria", "mary");

// $aluno->setDeslogin("Patricia");
// $aluno->setDessenha("1542");

$aluno->insert();

echo $aluno;
*/

$usuario = new Usuario();
$usuario->loadById(5);

$usuario->update("Patricia Ramos", "78903");

echo $usuario;

?>