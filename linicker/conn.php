<?php

	class conn{
		private $host, $user, $senha, $banco, $con, $query;

		public function __construct(){
			$this->host = "localhost";
				$this->user = "root";
				$this->senha = "1q";
				$this->banco = "bd";

				self::start();
		}

		function start(){
	
		//	$this->con = mysqli_connect("$this->host", "$this->user", "$this->senha", "$this->banco") or die ("erro 001");
	
			$this->con = new PDO("mysql:host=$this->host;dbname=$this->banco;", "$this->user" , "$this->senha");
		}	


		function exeQuery(){
			var_dump($this->con);
//			$this->query 
//			$alunos =	$this->con->prepare("SELECT * FROM alunos");
//			$alunos->execute();
//			var_dump($alunos->fetchAll());
		}
	}
	

/*	
	$obj->nome();
	$obj->
*/















	?>