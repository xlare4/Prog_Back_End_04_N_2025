<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>aula06_01 - 17/09/25</h1>
    <h2>Operadores Aritméticos</h2>
    <?php
    $a=10;
    $b=2;
    echo "Adição:" .($a + $b);
    echo "<br>Subtração:" .($a - $b);
    echo "<br>Multipliação:" .($a * $b);
    echo "<br>Divisão:" .($a / $b);
    echo "<br>Módulo:" .($a % $b);
    echo "<br>Exponenciação:" .($a ** $b);
      ?>
       <h2>Operadores Aritméticos</h2>
       <?php
$a=10; //o a esta recebendo do b, a=12
$b=2;
$a+=$b;
$b-=5; // b recebe 2-5, b=-3
echo "a = ".$a;
echo "<br>b = ".$b;
$c=11;
$d=6;
$c%=$d;//$c=11%6//$c=5
$d+=$a;//$d=6=12//$d=18
echo "<br>c = ".$c;//5
echo "<br>d = ".$d;//18
?>
<h2>Operador de String</h2>
<?php
$a = "Bete ";
echo "$a <br>";
$b = "Maria ";
echo "$b <br>";
echo $a . $b;
$b .= $a; //b=Maria Bete
echo "<br>$b"; //Maria Bete
?>
<h2>Incremento / Decremento</h2>
<?php
$x = 100;
echo "x = ".++$x;//101
echo "<br>x final = ".$x;//101
echo"<hr>";
$i=10;
echo "<br>i = $i";//10
$i++;//11
$i++;//12
++$i;//13
++$i;//14
$i+=4; //simplificando
echo "<br>i = $i";//14
$i--;//13
$i--;//12
--$i;
echo "<br>i = $i";//11
?>
<h2>Operador de Comparação</h2>
<?php
/*
= atribuir
== igualdade
=== identico
*/
$a=10; //10 inteiro
$b="10"; // string
echo "Igualdade = ".($a==$b)."<br>";//1
echo "Idêntico = ".($a===$b)."<br>";//
echo "Não igual = ".($a!=$b)."<br>";//
echo "Não Idêntico = ".($a!==$b)."<br>";//1
?>
<?php
$a=10;
$b=10;
$c=11;
echo "Menor: ".($a<$b)."<br>";//
echo "Menor ou igual: ".($a<=$b)."<br>";//1
echo "Maior: ".($c>$b)."<br>";//1
echo "Maior ou igual: ".($c>=$b)."<br>";//1
?>

</body>
</html>