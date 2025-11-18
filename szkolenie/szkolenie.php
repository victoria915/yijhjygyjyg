<?php
$polaczenie=mysqli_connect('localhost','root','','firma');
?>



<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firma szkoleniowa</title>
    <link href="szkolenie.css" rel="stylesheet">
</head>
<body>
    <header>
        <img src="baner.jpg" alt="Szkolenia">
    </header>
<nav class="menu">
<ul class="lista">
    <li><a href="index.html">Strona główna</a></li>
    <li><a href="szkolenie.php">Szkolenia</a></li>
</ul>

<main>

</main>


<footer>
    <h2>Firma szkoleniowa ul.Główna 1 23-456 Warszawa</h2>
    <p>Autor:Victoria Lidzbarska</p>
</footer>
</body>
</html>
<?php
mysqli_close($polaczenie)
?>
