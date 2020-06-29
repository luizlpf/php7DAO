<?php

/*

$sql = new Sql();


$usuarios = $sql->select("SELECT*FROM tb_usuarios");

echo json_encode($usuarios);
*/

require_once("config.php");


//carrega um usuario

/*$root = new Usuario();

$root->loadById(7);

echo $root;
*/

//carrega uma lista de usuario;
/*$lista = Usuario::getList();

echo json_encode($lista);
*/

//carrega uma lista de usuario buscando pelo login

/*$search = Usuario::search("ul");

echo json_encode($search);
*/


//carrega um usuario pelo login e senha
$usuario = new Usuario();

$usuario->login("Luiz", "45678912");

echo $usuario;
?>