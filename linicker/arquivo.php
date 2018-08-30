<?php

	class AULA_PRINT{
	
		public $nome;

		function GET_nome(){
			return $this->nome;
		}

		function SET_nome($nm){
			$this->nome = $nm;
		}

		function nome(){
				
			}

		function br(){
					echo "<br>";
			}

		function exibir(){
					echo $this->nome."<br> Aula de programação OOP";
			}
		
	}

	$obj = new AULA_PRINT;
	$obj->SET_nome("linicker");
	$obj->exibir();
	$obj->br();
?>
