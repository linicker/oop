<?php 
//	require_once 'functions.php';

	require_once 'conn.php';

	$obj = new conn;
	$qry = "select * from aluno";
	$obj->exeQuery($qry);




?>