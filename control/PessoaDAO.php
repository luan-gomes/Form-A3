 <?php

 	include_once('../conect_bd.php');
 	include_once('../model/Pessoa.php');

	class PessoaDAO{
		
		public $pessoa;
		
		function __construct($pessoa){

			$this->pessoa = $pessoa;

		}
		
		function inserirPessoa(){

			$mysqli = abrirConexao();
			$sql = $mysqli->prepare('INSERT INTO pessoa VALUES (null,?,?,?,?,?,?,?)');
			$sql->bind_param("sssssss",$this->pessoa->nome,$this->pessoa->cpf,$this->pessoa->sexo,$this->pessoa->reservista,$this->pessoa->linkimage,$this->pessoa->email,$this->pessoa->senha);
			$sql->execute();
			fecharConexao($mysqli);

		}

	}

	if (isset($_POST['acao'])) {

		$name = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$sex = $_POST['sexo'];
		$file = $_POST['perfil'];
		$reserv = $_POST['reservista'];
		$email = $_POST['email'];
		$pass = $_POST['senha'];


		$person = new Pessoa($name,$cpf,$sex,$file,$reserv,$email,$pass);
		$control = new PessoaDAO($person);
		$control->inserirPessoa();

	}

?>