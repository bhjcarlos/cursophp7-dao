<?php

require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql -> select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//função carrega apenas um usuario
//$root = new Usuario();
//$root -> loadbyId(5);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);
//Carrega uma lista de usuario buscando pelo login
//$search = Usuario::search("us");
//echo json_encode($search);

//Carrega um usuario usando um login e a senha
//$usuario = new Usuario();
//$usuario -> login("root", "909090");

//echo $usuario;

//Criando um novo usuário
//$aluno = new Usuario();

//$aluno -> setDeslogin("aluno");
//$aluno -> setDessenha("@aluno");
//$aluno -> insert();

/*
Criando um novo usuário
$aluno = new Usuario("aluno", "@luno0");
$aluno -> insert();
echo $aluno;
*/

$usuario = new Usuario();

$usuario -> loadbyId(13);

$usuario -> update("professor", "prof");

echo $usuario;

?>