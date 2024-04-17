<!DOCTYPE html>
<html lang="en-EN">
<head>
    <title>Booking</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Family Lato -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&amp;display=swap" rel="stylesheet">
    <!-- FontAwesome 6.5.1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<aside>
    <img src="hotel.png" alt="hotel"/>
</aside>

<main>
    <section class="right-side">
        <h2>Dane rezerwującego</h2>
        <?php
        $guests = $_POST["guests"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $address = $_POST["address"];
        $card = $_POST["card"];
        $email = $_POST["email"];
        $dateIn = $_POST["dateIn"];
        $timeIn = $_POST["timeIn"];
        $dateOut = $_POST["dateOut"];
        $timeOut = $_POST["timeOut"];
        $extras = $_POST["extras"];


        echo "<p>Imię: $firstName[0] <p>";
        echo "<p>Nazwisko: $lastName[0]";
        echo "<p>Adres: $address</p>";
        echo "<p>Numer karty kredytowej: $card</p>";
        echo "<p>E-mail: $email</p>";
        echo "<p>Data przyjazdu: $dateIn</p>";
        echo "<p>Godzina przyjazdu: $timeIn</p>";
        echo "<p>Data wyjazdu: $dateOut</p>";
        echo "<p>Godzina wyjazdu: $timeOut</p>";
        echo "<p>Udogodnienia: ";
        foreach ($extras as $extra) {
            echo "$extra, ";
        }
        echo "</p>";
        echo "<p>Liczba gości: $guests</p>";
        if ($guests > 1) {
            echo "<h2>Dane gości: </h2>";
        }
        for($i = 1; $i < count($firstName); $i++) {
            echo $firstName[$i] . " " . $lastName[$i] . "<br>";
        }

        ?>
    </section>
</main>

<footer>
    <section>
        <a href="#" target="_blank" id="facebookIcon">
            <i class="fa-brands fa-facebook fa-2xl"></i>
        </a>
        <a href="#" target="_blank" id="instagramIcon">
            <i class="fa-brands fa-instagram fa-2xl"></i>
        </a>
    </section>

    <section>
        <a href="#">KONTAKT</a> | <a href="#">LOKALIZACJA</a>
    </section>
</footer>
</body>
</html>
