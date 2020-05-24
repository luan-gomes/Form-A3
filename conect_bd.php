<?php

$host = "localhost";
$banco = "formulario";
$usuario = "root";
$senha = "";
$pdo;

function abrirConexao(){
	global $pdo, $host, $usuario, $senha, $banco;;

	if($pdo == null){
		try{
			$pdo = new PDO('mysql:host='.$host.';dbname='.$banco,$usuario,$senha,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
					echo 'erro ao conectar';
		}
	}

}

function fecharConexao(){
	global $pdo;
	$pdo=null;
}

?>