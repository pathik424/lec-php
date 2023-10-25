
// C:\xampp\htdocs\lec-php\Core Php Project //


<?php
// It will check leap years between 1901 and 2016 using nested if statements
for ($year = 1901; $year <= 2016; $year++) {
    if ($year % 4 == 0) {
        if ($year % 100 == 0) {
            if ($year % 400 == 0) {
                echo "$year is a leap year.\n";
            }
        } else {
            echo "$year is a leap year.\n";
        }
    }
}
?>
