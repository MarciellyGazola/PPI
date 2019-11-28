<html>
<head>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<body>
</body>
</html>
<?php

	$server = "localhost: 3306";
	$user = "root";
	$senha = "";
	$banco = "capsula";

	$link = mysqli_connect($server, $user, $senha, $banco);

	if(!$link){
		echo "Nao foi ossivel conectar ao MySQL." . PHP_EOL;
		echo "Debugging erro: ". mysqli_connect_error() . PHP_EOL;
		exit;
	}

 ?>
