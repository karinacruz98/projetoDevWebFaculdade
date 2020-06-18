<?php 
	class Handler {

		public static function arrayLogin(){
			$login = [];
			//$login['nome'] = $_POST['nome'];
			//$login['sexo'] = $_POST['sexo'];
			//$login['data_nascimento'] = $_POST['data_nascimento'];
			//$login['estado_civil'] = $_POST['estado_civil'];
			//$login['endereco'] = $_POST['endereco'];
			//$login['email'] = $_POST['email'];
			//$login['senha'] = $_POST['senha'];
			//$login['telefone_residencial'] = $_POST['telefone_residencial'];
			//$login['telefone_celular'] = $_POST['telefone_celular'];
			//$login['mensagem'] = $_POST['mensagem'];

			return $login;
		}

		public static function arrayCadastro(){
			$cadastro = [];
			$cadastro['nome'] = $_POST['nome'];
			$cadastro['sexo'] = $_POST['sexo'];
			$cadastro['data_nascimento'] = $_POST['data_nascimento'];
			$cadastro['estado_civil'] = $_POST['estado_civil'];
			$cadastro['endereco'] = $_POST['endereco'];
			$cadastro['email'] = $_POST['email'];
			$cadastro['senha'] = $_POST['senha'];
			$cadastro['telefone_residencial'] = $_POST['telefone_residencial'];
			$cadastro['telefone_celular'] = $_POST['telefone_celular'];
			$cadastro['mensagem'] = $_POST['mensagem'];

			return $cadastro;
		}

		public static function arrayProduto(){
			$produto = [];
			$produto['produto'] = $_POST['produto'];    
		
			return $produto;
		}
		 
	}
?>