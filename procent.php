
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>Równanie kwadratowe</title>
</head>
<body>
<font size="5">
	<h1>Procent składany</h1>
	<hr size="10" color="gold">
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
<br>
<form action="dwa.php" method="GET">
Kwota początkowa Ko: <input type=text name="kwota"/><br>
Stopa procentowa i: <input type=text name="Oprocentowanie"/><br>
Kapitalizacja m: <input type=text name="kap"/><br>
Ilość lat n: <input type=text name="lata"/><br>
<input type=submit value="Oblicz"/>
</form>
<br>

</font>
</body>
</html>