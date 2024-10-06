<?php 
echo "<html>
<body>
<h1>Gioco dell'Indovina Numero</h1>
<p>Regole del gioco: Si deve indovinare nel minor numero di tentativi un <br>
numero compreso fra 0 e 99 estratto casualmente dal sistema.</p>";
echo"<form action=estern.php method=get>
"; $tentativo = 1;
$random = rand(0,100); echo"
<p>Tentativo $tentativo °<input type=text name=valore>
<input type=hidden name=tentativi value=$tentativo>
<input type=hidden name=random value=$random>
<input type=submit name=tenta>
</form>";
echo "</body>
</html>;"
?>