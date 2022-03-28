<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$nome=$_POST ['nome'];
$cpf=$_POST ['cpf'];
$data=$_POST ['data'];
$rg=$_POST ['rg'];
$turma=$_POST ['turma'];

$a= array($nome,
        $cpf,
        $data,
        $rg,
        $turma);
 
        print("Nome: ".$a[0]);
        echo "<br>";
        print("CPF: ".$a[1]);
        echo "<br>";
        print("Data de Nascimento: ".$a[2]);
        echo "<br>";
        print("RG: ".$a[3]);
        echo "<br>";
        print("Turma: ".$a[4]);


?>
<br>
<br>
<a href="exer2.php">
Voltar        
</a>
<br>
<br>
<a href="index.php">
Ir ao menu       
</a>
</body>
</html>

