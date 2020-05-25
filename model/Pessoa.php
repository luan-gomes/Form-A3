<?php
	class Pessoa{
		
		public $nome;
		public $cpf;
		public $sexo;
		public $linkimage;
		public $reservista;
		public $email;
		public $senha;

		function __construct($nome, $cpf, $sexo, $link, $reserv, $email, $senha){
			$this->nome = $nome;
			$this->cpf = $cpf;
			$this->sexo = $sexo;
			$this->linkimage = $link;
			$this->reservista = $reserv;
			$this->email = $email;
			$this->senha = $senha;
		}	
		
	}
?>