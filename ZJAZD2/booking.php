<!DOCTYPE html>
<html lang="en-EN">
<head>
    <title>Zjazd 2 - Zadania</title>
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
<main>
    <section class="left-side">
    </section>

    <section class="right-side">
        <h2>Twoja rezerwacja</h2>
        <?php
        $firstName = $_GET["firstName"];
        $lastName = $_GET["lastName"];
        $address = $_GET["address"];
        $card = $_GET["card"];
        $email = $_GET["email"];
        $date = $_GET["date"];
        $time = $_GET["time"];
        $extraBed = $_GET["extraBed"];
        $extras = $_GET["extras"];
        echo $firstName;
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

