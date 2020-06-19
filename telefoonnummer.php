<?php

// Args
$telefoonnummer = $argv[1];
echo "";

// Regex check
$regex = "/^[0-9]{10}$/";
preg_match($regex, $telefoonnummer, $match);

// Result
if (isset($match[0]) && $match[0] === $telefoonnummer) {
    echo "Het ingevoerde telefoonnummer is: '{$telefoonnummer}' en dat is juist";
} else {
    echo "Het ingevoerde telefoonnummer is: '{$telefoonnummer}' en dat is onjuist";
}