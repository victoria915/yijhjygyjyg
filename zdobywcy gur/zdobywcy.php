<?php
$polaczenie=mysqli_connect('localhost','root','','zdobywcy');
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZDOBYWCY GÓR</title>
    <link href="zdobywcy.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Klub zdobywców gór polskich</h1>
    </header>

    <nav>  
        <a href="kw1.png">KWERENDA1</a>
        <a href="kw1.png">KWERENDA2</a>
        <a href="kw1.png">KWERENDA3</a>
        <a href="kw1.png">KWERENDA4</a>
    </nav>
    <main>
        <aside>
            <section class="lewo">
                <img src="logo.png" alt="logo zdobywcy">
                <h3>razem z nami: </h3>
                <table>
                    <ul>
                        <li>Wyjazdy</li>
                        <li>Szkolenia</li>
                        <li>Rekreacja</li>
                        <li>Wypoczynek</li>
                        <li>Wyzwania</li>
                    </ul>
                </table>
        </aside>
    </main>
        <div>
        <section class="prawo">
            <h2>Dolącz do naszego zespołu!</h2>
            <p>Wpisz swoje dane do formularza:<p>

            <form method="POST" action="">
                Nazwisko: <input type="text" name="nazwisko"><br>
                Imie: <input type="text" name="imie"><br>
                Funkcja: <input type="text" name="funkcja"><br>
                Email: <input type="email" name="mail"><br>
                <input type="submit" name="zapisz" value="zapisz do bazy">
            </form>
        <?php
        if(isset($_POST['zapisz'])){
        $nazwisko=$_POST['nazwisko'];
         $imie=$_POST['imie'];
        $funkcja=$_POST['funkcja'];
        }

       
        ?>
        </div>
<footer>
        <p>ok</p>
</footer>
    

</body>
</html>
<?php
mysqli_close($polaczenie)
?>