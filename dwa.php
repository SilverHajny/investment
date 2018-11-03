<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title></title>
		<style type="text/css">
		
		
		</style>
		
	</head>
	<body>
<font size="5">
	<h1>Procent składany-wynik</h1>
	<hr size="10" color="gold">
	
<br>
Kwota początkowa Ko: <?php echo $_GET['kwota']?><br>
Stopa procentowa i: <?php echo $_GET['Oprocentowanie']?><br>
Kapitalizacja m:<?php echo $_GET['kap']?><br>
Ilość lat n: <?php echo $_GET['lata']?><br>

<br>
Kn=Ko[(1+i/m)^m]^n<br>
<br>
Gdzie:<Br>
Kn=kwota końcowa<br>
Ko=kwota początkowa<br>
i-stopa procentowa<br>
m-kapitalizacja(12-miesięczna,4-kwartalna,1-rok,365-dni)<br>
n-ilość lat<br>
<br>
<h1>Zmienne:</h1>
	   <?php
$kwota= $_GET['kwota'];
$Oprocentowanie1= $_GET['Oprocentowanie'];
$Oprocentowanie= $Oprocentowanie1/100;
$kap= $_GET['kap'];
$lata= $_GET['lata'];
echo "<br>";
echo "Kwota początkowa:";
echo $kwota;
echo "<br>";
echo "Oprocentowanie";
echo $Oprocentowanie;
echo "<br>";
echo "Kapitalizacja";
echo $kap;
echo "<br>";
echo "Lata";
echo $lata;
echo "<br>";

$Wynik=$kwota*((1+$Oprocentowanie/$kap)^$kap)^$lata;
$Wynik1=((1+$Oprocentowanie/$kap)^$kap)^$lata;
$Wynik2=(1+$Oprocentowanie/$kap);
echo "<br>";
echo "Oprocentowanie/kapitalizację";
echo "<br>";
$Wynik3=$Oprocentowanie/$kap;
echo $Wynik3;
echo "<br>";
echo "(1+Oprocentowanie/kapitalizację )";
echo "<br>";
$Asior=1+$Wynik3;
echo $Asior;
echo "<br>";
echo "(1+Oprocentowanie/kapitalizację )^kap";
echo "<br>";
echo pow($Asior,$kap);
echo "<br>";
echo "((1+Oprocentowanie/kapitalizację )^kap)^lata";
echo "<br>";
$pol= pow($Asior,$kap);
$dra= pow($pol,$lata);
$ostate=$dra*$kwota;
echo "<h1>Wynik</h1>";
echo $ostate;
	  ?> 
</h1>
<br>	   
	   
	   
	


	</body>
</html>
