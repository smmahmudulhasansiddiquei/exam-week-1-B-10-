<?php
    $strings = ["Bangladesh", "Laravel", "PHP", "Assignment"];

    foreach ($strings as $str) {
        // Count consonants (non-vowel letters only)
        $consonantCount = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i', $str);

        // Convert to uppercase
        $uppercaseStr = strtoupper($str);

        // Print result
        echo " Original String: $str, Consonant Count: $consonantCount, Uppercase String: $uppercaseStr <br>";
    }
?>