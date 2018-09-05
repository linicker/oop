<?php
	include_once 'conn.php';
	class Dml extends conn{
		protected $sql, $tabela, $camposTabela, $dados, $camposTabelaId, $dadosId, $IdcomposTabelaDados, $msg;

		function pegarTabela($tbl){
			$this->tabela = $tbl;

		}
		function pegarCamposTabela($camposTabela){
			$this->camposTabela = $$camposTabela;
			
		}
		function pegarDados($dados){
			$this->dados = $dados;
			
		}
		function pegarCamposTabelaId($camposTabelaId){
			$this->camposTabelaId = $camposTabelaId;
			
		}
		function pegarDadosId($dadosId){
			$this->dadosId = $dadosId;
			
		}

		function IdcomposTabelaDados($IdcpsTblDads){
			$this->dadosId = $dadosId;
			
		}





		function RetornarMsg(){
			return $this->msg;
		}

		function Inserir(){
			$this->sql = "INSERT INTO $this->tabela $this->composTabela VALUES $this->dados";

			if (self::exeQuery($this->sql)) {
				$this->msg = "Cadastrado com sucesso.";
			}
		}
		function Deletar(){
			$this->sql = "DELETE FROM $this->tabela WHERE $this->composTabelaId = $this->dadosId";

			if (self::exeQuery($this->sql)) {
				$this->msg = "Atualizado com sucesso.";
			}	
		}
		function Atualizar(){
			$this->sql = "UPDATE $this->tabela SET $this->camposTabelaDados";

			if (self::exeQuery($this->sql)) {
				$this->msg = "Apagado com sucesso.";
			}	
		}
	

	}

	$inserirTblPessoa = new Dml;
	$inserirTblPessoa->pegarTabela($tabela);
	$inserirTblPessoa->pegarCamposTabela($camposTabela);
	$inserirTblPessoa->pegarDados($dados);
	$inserirTblPessoa->Inserir();
	echo $inserirTblPessoa->RetornarMsg();

