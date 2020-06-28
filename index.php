<?php

/*

$sql = new Sql();


$usuarios = $sql->select("SELECT*FROM tb_usuarios");

echo json_encode($usuarios);
*/

require_once("config.php");
$root = new Usuario();

$root->loadById(7);

echo $root;
?>