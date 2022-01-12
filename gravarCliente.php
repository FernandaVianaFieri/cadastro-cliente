<?PHP 

	$servidor = "localhost";
    $usuario = "root";
    $senha = "onix2019";
    $dbname = "sist";
    
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conn){
       // die("Falha na conexao: " . mysqli_connect_error());
    }else{
        //echo "Conexao realizada com sucesso";
    }
	$insert= "INSERT INTO clientes2(NomeCliente, Nascimento, Sexo, EstadoCivil, Email, ReceberEmail, DDD1, Telefone1, Tipo1, DDD2, Telefone2, Tipo2, DDD3, Telefone3, Tipo3, Observacoes) VALUES 
	('".$_POST['nome']."','".$_POST['nascimento']."','".$_POST['sexo']."','".$_POST['estadocivil']."','".$_POST['email']."','".$_POST['receberEmail']."','".$_POST['ddd1']."','".$_POST['tel1']."','".$_POST['tipo1']."','".$_POST['ddd2']."','".$_POST['tel2']."','".$_POST['tipo2']."','".$_POST['ddd3']."','".$_POST['tel3']."','".$_POST['tipo3']."','".$_POST['observacoes']."')";
    
	echo $insert;
	$result= mysqli_query($conn, $insert);
	
	echo 'Obrigada por concluir seu cadastro'; 

?>