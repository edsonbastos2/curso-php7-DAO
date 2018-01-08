<?php 
require_once("config.php");

/*$sql = new Sql();
$usuario = $sql->select("SELECT * FROM tb_usuarioa");

echo json_encode($usuario);*/

// Carrega um usuario
//$root = new Usuario();
//$root->loadById(4);
//echo $root;

//Carrega uma lista de usuario
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login 
//$search = Usuario::search("ed");
//echo json_encode($search);

//$login = new Usuario();
//$login->login("edson","redhot");
//echo $login;

/*Criando um novo usuario

$aluno = new Usuario("user","root");
$aluno->insert();

echo $aluno;
*/

/*Altera o usuario
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->update("Admin", "p@ssw0rd");
echo $usuario;
*/

$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;
?>
