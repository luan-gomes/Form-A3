<?php

define ('HOSTNAME','localhost');
define ('USERNAME', 'root');
define ('PASSWORD','');
define ('DATABASE','web');
define ('CHARSET','utf8');

function abrirConexao(){

	$sql = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE) or die(mysqli_error());
	mysqli_set_charset($sql,CHARSET) or die (mysqli_error($sql));
	return $sql;

}

function fecharConexao($sql){

	@mysqli_close($sql) or die (mysqli_error($sql));

}

?>