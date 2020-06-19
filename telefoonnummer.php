<?php

// Args
if (!isset($argv[1])) {
    die('Hahaha jij denke dit werke zonder telefoonnummer dacht het niet!');
}
$telefoonnummer = $argv[1];

// Regex check
$regexWOL = "/[0-9]{10}/m";
$regexWL = "/[+][0-9]{11}/m";
preg_match($regexWL, $telefoonnummer, $matchWL);
preg_match($regexWOL, $telefoonnummer, $matchWOL);

// Result
if (isset($matchWL[0]) && $matchWL[0] === $telefoonnummer || $matchWOL[0] === $telefoonnummer) {
    echo "Het ingevoerde telefoonnummer is: '{$telefoonnummer}' en dat is juist";
} else {
    echo "Het ingevoerde telefoonnummer is: '{$telefoonnummer}' en dat is onjuist";
}