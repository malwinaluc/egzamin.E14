<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wynajmujemy samochody</title>
    <link rel="stylesheet" href="syle.css">
</head>
<body>
    
    <section id="baner">
        <h1>Wynajem Samochodów</h1>
    </section>

    <section id="panel_lewy">
        <h2>Dziś polecamy Toyotę rocznik 2014</h2>
        <?php
    
    $conn = mysqli_connect("localhost", "root", "", "komis") or die("Błąd łączenia z bazą");
	
    mysqli_set_charset($conn, "utf8");

    $sql = 'SELECT id, model, kolor FROM `samochody` WHERE marka="Toyota" and rocznik=2014';
    $result = mysqli_query($conn, $sql) or die("Błąd pobrania danych z bazy");
    

        while($row = mysqli_fetch_assoc($result)) {
            echo $row['id'];
            echo " Toyota ".$row['model'];
            echo " kolor ".$row['kolor'];
        }
    mysqli_close($conn);
?>

        <h2>Wszystkie dostępne samochody</h2>

        <?php
    
    $conn = mysqli_connect("localhost", "root", "", "komis") or die("Błąd łączenia z bazą");
	
    mysqli_set_charset($conn, "utf8");

    $sql = 'SELECT id, marka, model, rocznik FROM samochody';
    $result = mysqli_query($conn, $sql) or die("Błąd pobrania danych z bazy");
    

        while($row = mysqli_fetch_assoc($result)) {
            echo $row['id'];
            echo $row['marka'];
            echo $row['model'];
            echo $row['rocznik']."<br>";
        }
    mysqli_close($conn);
?>

    </section>

    <section id="panel_srod">
        <h2>Zamówione auta z numerami telefonów klientów</h2>
        <?php
    
    $conn = mysqli_connect("localhost", "root", "", "komis") or die("Błąd łączenia z bazą");
	
    mysqli_set_charset($conn, "utf8");

    $sql = 'SELECT Samochody_id, model, telefon FROM samochody, zamowienia WHERE id.samochody=samochody_id';
    $result = mysqli_query($conn, $sql) or die("Błąd pobrania danych z bazy");
    

        while($row = mysqli_fetch_assoc($result)) {
            echo $row['Samochody_id'];
            echo $row['model'];
            echo $row['telefon']."<br>";
        }
    mysqli_close($conn);
?>
    </section>

    <section id="panel_prawy">
        <h2>Nasza oferta</h2>
        <ol>
            <ul>Fiat</ul>
            <ul>Toyota</ul>
            <ul>Opel</ul>
            <ul>Mercedes</ul>    
        </ol>


    <p>Tu pobierzesz naszą <a href="komis.sql">bazę danych</a></p>
    <p>Autor strony:Mój pesel</p>
    </section>



</body>
</html>