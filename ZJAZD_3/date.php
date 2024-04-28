<?php
    if(isset($_GET['birthday'])) {
        $birthday = $_GET['birthday'];
        $today = date('Y-m-d');
        $dayOfWeek = date('l', strtotime($birthday));
        $age = date_diff(date_create($birthday), date_create($today))->y;

        $leftDays = date('Y-m-d', strtotime($birthday . " +$age years"));
        if ($today > $leftDays) {
            $next_birthday = date('Y-m-d', strtotime($leftDays . " +1 year"));
        }
        $days_until_next_birthday = date_diff(date_create($today), date_create($next_birthday))->days;

        echo "Dzień urodzenia: $dayOfWeek <br>";
        echo "Wiek: $age<br>";
        echo "Dni do urodzin: $days_until_next_birthday dni.";
    }
?>
