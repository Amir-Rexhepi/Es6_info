<?php
$tentativo = $_GET["tentativi"];
$random = $_GET["random"];
$valore = $_GET["valore"];
if($tentativo < 5)
{
    if($valore > $random){
        echo"<h1>Numero troppo grande</h1>";
        $tentativo++;
        echo"<form action=estern.php method=get>
        <p>Tentativo $tentativo °<input type=hidden name=tentativi value=$tentativo>
        <input type=hidden name=random value=$random>
        <input type=hidden name=valore value=$valore>
        <input type=text name=valore>
        <input type=submit name=tenta></p></form> ";
    }
    else if($valore < $random)
    {
        echo "<h1>Numero troppo piccolo</h1>";
        $tentativo++;
        echo"
        <form action=estern.php method=get>
        <p>Tentativo $tentativo °<input type=hidden name=tentativi value=$tentativo>
        <input type=hidden name=random value=$random>
        <input type=hidden name=valore value=$valore>
        <input type=text name=valore>
        <input type=submit name=tenta></p>
        </form>";

    }
    else{
        echo"Bravo, hai indovinato in $tentativo!
        <form action=index.php method=get>
        <input type=submit name=tenta</p>
        </form>";
    }
}
else{
    echo"Spiacente, hai superato il numero massimo dei tentativi!
    <form action=index.php method=get>
        <input type=submit name=tenta></p>
        </form>";
}

?>