<?php
$polaczenie = mysqli_connect('localhost','root','','mieszalnia');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" styles="text/css" href="style.css">
    <link rel="icon" type="image/png" href="fav.png" sizes="32x32">
    <title>Mieszalnia farb</title>
</head>
<body>
    <header>
        <img src="baner.png" alt="Mieszalnia farb">
    </header>
    <aside>
        <form>  
            <label>Data odbioru od</label>
            <input type="date"></input>
            <label>do</label>
            <input type="date"></input>
            <button type="submit">Wyszukaj</button>
        </form>
    </aside>
    <main>
        <table>
            <tr>
                <th>Nr zamówienia</th>
                <th>Nazwisko</th>
                <th>Imię</th>
                <th>Kolor</th>
                <th>Pojemnośc [ml]</th>
                <th>Data odbioru</th>
            </tr>
            <?php
            $zapytanie = "SELECT zamowienia.id, nazwisko, imie, zamowienia.kod_koloru, zamowienia.pojemnosc,   zamowienia.data_odbioru FROM klienci 
JOIN zamowienia ON klienci.id = zamowienia.id_klienta 
ORDER BY Data_odbioru DESC;";
            $wynik = mysqli_query($polaczenie, $zapytanie);
                while ($wiersz=mysqli_fetch_row($wynik)){
                    echo
                    "<tr>
                    <td>$wiersz[0]</td>
                    <td>$wiersz[1]</td>
                    <td>$wiersz[2]</td>
                    <td>$wiersz[3]</td>
                    <td>$wiersz[4]</td>
                    <td>$wiersz[5]</td>
                    </tr>";
                }
            ?>
        </table>
    </main>
    <footer>
        <h3>Egzamin INF.03</h>
        <p>Autor Victoria Lidzbarska</p>
    </footer>
</body>
</html>
<?php
mysqli_close($polaczenie);
?>