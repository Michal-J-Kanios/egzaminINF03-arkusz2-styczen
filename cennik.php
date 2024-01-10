<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynajem pokoi</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header>
        <h1>Pensjonat pod dobrym humorem</h1>
    </header>

<section id="flexy">

    <section id="lewy">
        <a href="index.html">GŁÓWNA</a>
        <img src="1.jpg" alt="pokoje">
    </section>

    <section id="srodek">
        <a href="cennik.php">CENNIK</a>
        <table>
            <?php
            $polaczenie = mysqli_connect("localhost", "root", "", "wynajem");
            $zapytanie = mysqli_query($polaczenie, "SELECT * FROM `pokoje`;");

            while ($row = mysqli_fetch_array($zapytanie))
            {
                echo "<tr>";
                echo "<td>".$row[0]."</td>";
                echo "<td>".$row[1]."</td>";
                echo "<td>".$row[2]."</td>";
                echo "</tr>";
            }

            mysqli_close($polaczenie);
            ?>
        </table>
    </section>

    <section id="prawy">
        <a href="kalkulator.html">KALKULATOR</a>
        <img src="3.jpg" alt="pokoje">
    </section>

</section>

    <footer>
        <p>Stronę opracował: 000000000000</p>
    </footer>
</body>
</html>