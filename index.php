<?php 
require_once("config.php");

$sql = new Sql();
$usuario = $sql->select("SELECT * FROM tb_usuarioa");

echo json_encode($usuario);
?>