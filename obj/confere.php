<?php
   include("pessoa.php");
?>
   <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Cadastro</title>


            
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        </head>
        <body class="body">
        <div class="container">
        <center>
        <div class="card" style="width: 18rem;">
        <div class="card-body">
      
<?php

	$nome = $_POST['nome'];
	$rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    
    if(empty($nome || $rg || $cpf)){
        header("location: index.php");
    }
	
 
	$pessoa = new Pessoa();
        try{
            $pessoa->setNome($nome);
            $pessoa->setRg($rg);
            $pessoa->setCpf($cpf);
            
 
            echo "<h1 class='tt'> CADASTRO REALIZADO COM SUCESSO!</h1>";
 
        } catch (Exception $ex) {
                echo "<script> alert('" . $ex->getMessage() . "'); </script>";
        } 
        ?>
        
      
        <br>
        <div class="texts">
        <?php
        echo "NOME: " .$nome;
        echo "<br><br>";
        echo "RG: " .$rg;
        echo "<br><br>";
        echo "CPF: " .$cpf;
        echo "<br><br>";
        ?>
        <br>
        </div>
            <a class="btn" href="index.php">Voltar</a>
        </div>
        </div>
        </center>
            </div>
        </body>
        </html>