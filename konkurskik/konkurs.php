<?php
$polaczenie=mysqli_connect("localhost", "root", "", "konkurs")
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WOLONTARIAT SZKOLNY</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>KONKURS - WOLONTARIAT SZKOLNY</h1>
    </header>
    <main>
        <aside>
            <div class="lewo"><h3>Konkursowe Nagrody</h3>   
            <table>
                <tr><th>Nr</th><th>Nazwa</th><th>Opis</th><th>Wartość</th></tr>
                <form>
                    <button type="Submit">Losuj nowe nagrody</button></div>
                </form>
                <?php
                $zapytanie = "SELECT nazwa, opis, cena FROM nagrody ORDER BY RAND() Limit 5";
                $wynik = mysqli_query($polaczenie, $zapytanie);
                $nr = 1;
                while ($wiersz=mysqli_fetch_row($wynik)){
                    echo
                    "<tr>
                    <td>$nr</td>
                    <td>$wiersz[0]</td>
                    <td>$wiersz[1]</td>
                    <td>$wiersz[2] zł</td>
                    </tr>";
                    $nr++;
                }
                ?>
            </table>
        </aside>
    
        <div class="prawo"><img src="puchar.png"><h4>Polecane linki</h4></div>
    </main>
    <div class="dol">Numer zdajacego 00000000</div>
</body>
</html>