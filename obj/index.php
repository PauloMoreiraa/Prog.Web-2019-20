<?php
   include("pessoa.php");
?>
 
<html>
<head>
	<title> Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />
</head>
<body class="body">
<div class="container">
<center>
<div class="card" style="width: 18rem;">
<div class="card-body">

    <h1 class="txt">Cadastre-se</h1>
    <br>
	<form method="post" action="confere.php">
		
			
			
				<input class="lb" type="text" name="nome" placeholder="Nome">
                <br>
                <br>
				
				<input class="lb" type="text" name="rg" placeholder="RG">
                <br>
                <br>
				
				<input class="lb" type="text" name="cpf" placeholder="CPF">
                <br>
                <br>
		
				<input class="btn" type="submit" value="Cadastrar">
	
	</form>
    
    </div>
    </div>
    </center>
    </div>
    
</body>
</html>
 

 

