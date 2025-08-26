<?php
function getZodiac($day, $month) {
    if     (($month == 3  && $day >= 21) || ($month == 4  && $day <= 19)) return "Aries";
    elseif (($month == 4  && $day >= 20) || ($month == 5  && $day <= 20)) return "Taurus";
    elseif (($month == 5  && $day >= 21) || ($month == 6  && $day <= 20)) return "Gemini";
    elseif (($month == 6  && $day >= 21) || ($month == 7  && $day <= 22)) return "Cancer";
    elseif (($month == 7  && $day >= 23) || ($month == 8  && $day <= 22)) return "Leo";
    elseif (($month == 8  && $day >= 23) || ($month == 9  && $day <= 22)) return "Virgo";
    elseif (($month == 9  && $day >= 23) || ($month == 10 && $day <= 22)) return "Libra";
    elseif (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) return "Scorpio";
    elseif (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) return "Sagittarius";
    elseif (($month == 12 && $day >= 22) || ($month == 1  && $day <= 19)) return "Capricorn";
    elseif (($month == 1  && $day >= 20) || ($month == 2  && $day <= 18)) return "Aquarius";
    elseif (($month == 2  && $day >= 19) || ($month == 3  && $day <= 20)) return "Pisces";
    else return "Invalid date";
}

//The problem is fgets(STDIN) only works when PHP runs in the command line (CLI), not through XAMPP in a browser. 
// That’s why I got the Undefined constant "STDIN" error. So, I write the code without using 'STDIN'.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $day = (int)$_POST["day"];
    $month = (int)$_POST["month"];
    $zodiac = getZodiac($day, $month);
    echo "<h2>Your zodiac sign is: $zodiac</h2>";
}
?>

<form method="post">
    <label>Enter your birth day: <input type="number" name="day" min="1" max="31" required></label><br><br>
    <label>Enter your birth month: <input type="number" name="month" min="1" max="12" required></label><br><br>
    <input type="submit" value="Check Zodiac">
</form>
