<?php 

	$server = "localhost";
	$user= "root"; 
	$pass= "";
	$bd = "test";

	$conn = mysqli_connect($server, $user, $pass, $bd); //recebe os dados da conexão

	if($conn){ //funcao retorna v ou f e atribui a conexao em "conn"
		//echo "Conectado! ";
	}else
		echo "ERRO! ";

	function mensagem($texto, $tipo){
		echo "<div class='alert $tipo' role='alert'>$texto </div>";
	}

	function mostra_data($data){
		$d = explode('-', $data);
		$escreve = $d[2]."/".$d[1]."/".$d[0];
		return $escreve;
	}

?>