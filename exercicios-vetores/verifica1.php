<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$num4 = $_POST['num4'];
$i=0;
$j=0;
$a= array($num1,
        $num2,
        $num3,
        $num4);
        $t = count($a);
        $sp= " | ";

        print("Vetor: ");
        echo($a[0]." | ".$a[1]." | ".$a[2]." | ".$a[3]);
        echo "<br>";
        echo "<br>";
        print("Posição do Vetor: ");
		while($i<4) {
             print($i. " | ");
         $i++;
        }
        echo "<br>";
        echo"_______________________________________________________________________";
        echo "<br>";
        echo "<br>";
		print("Vetor Invertido: ");
		for ($i=($t-1);$i>=1;$i--) {
			print($a[$i] . $sp);
        }     
        echo"$a[$i] <br>";
		for ($j=($t-1);$j>=1;$j--) {
			for ($i=0;$i<1;$i++) {
			}
		}
        echo "<br>";
        
		print("Posições do Vetor Invertido: ");
		for ($i=($t-1);$i>=0;$i--) {
			if ($i!=0)print($i.$sp);
            else print ($i);}
    echo "<br>";
    echo "<br>";
?>

<a href="exer1.php">
Voltar        
</a>
<br>
<br>
<a href="index.php">
Ir ao menu       
</a>
</body>
</html>


