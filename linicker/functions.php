<?php 

	//CALCULAR MEDIA 

	class MEDIA{

		$md = ($av1 + $av2) /2;

		function soma(){
			if ($md >= 7) {
				echo "Aprovado!";
			} elseif ($md < 4){
				echo "Reprovado!";
			} else (($md >= 4) && ($md <7)){
				echo "Reavaliação!";
			}
		}

		function exibir($sm){
			$this->soma = $sm;
		}


/*
		function GET_av1(){

			return $av1;
		}

		function GET_av2(){

			return $av2;
		}

		function GET_av3(){

			return $av3;
		}	

		function GET_md(){
			if()

			return $this->media;
		}



		function SET_md($md){
			$this->media = $md;
		}

		function SET_av1($a){
			$this->av1 = $a;
		}

		function SET_av2($b){
			$this->av1 = $b;
		}

		function SET_av3($c){
			$this->av1 = $c;
		}

		*/
	}

	$obj = new MEDIA;
	$obj->exibir();

?>