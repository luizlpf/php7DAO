<?php

require_once("config.php");
//realiando select
/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/


//realiando busca por id
/*
$root = new Usuario();
$root->loadById(3);
echo $root;
*/

//carrega uma lista de usuarios
/*$lista = Usuario::getList();
echo json_encode($lista);
*/

//carrega umalista de usuarios buscando pelo login
/*$busca = Usuario::search("pa");
echo json_encode($busca);
*/

//carrega um usuario usando o login e a senha
/*$usuario = new Usuario();
$usuario->login("sam","00000");
echo $usuario;
*/

//criando um  novo usuario
/*
$aluno = new Usuario("nika", "102030");
$aluno->insert();
echo $aluno;
*/

$usuario = new Usuario();
$usuario->loadById(47);
$usuario->update("professor","2345");

echo $usuario;

?>