<?php 
//	require_once 'functions.php';
	echo "oop";

	require_once 'conn.php';

	$obj = new conn;
	$qry = "select * from aluno";
	$obj->exeQuery($qry);

	echo "conectado";


?>