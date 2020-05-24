 <?php

	include("../conect_bd.php");
	include("Pessoa.php");

	class PessoaDAO{
		
		public $pessoa;
		
		function __construct($p){
			$this->pessoa = $p;
		}
		
		function inserirPessoa(){	
			abrirConexao();
			global $pdo;
			$sql = $pdo->prepare("INSERT INTO pessoa VALUES(null,?,?,?,?,?,?,?,?,?)");
			$sql->execute( array($this->nome,$this->cpf,$this->sexo,$this->linkimage,$this->reservista,$this->email,$this->senha,CONVERT(date,SYSDATETIME()),CONVERT(time, SYSDATETIME())));
			fecharConexao();
		}

	}

	if (isset($_POST["acao"])) {

		$person = new Pessoa($_POST["nome"],$_POST["cpf"],$_POST["sexo"],$_POST["perfil"],$_POST["reservista"],$_POST["email"],$_POST["senha"]);
		$control = new PessoaDAO($person);
		$control->inserirPessoa();
	}
?>