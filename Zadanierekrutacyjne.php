<?php
// Klucz szyfrujący
$klucz = array(
    "1" => "a", "!" => "b", ")" => "c", "\"" => "d", "(" => "e", 
    "£" => "f", "*" => "g", "%" => "h", "&" => "i", ">" => "j", 
    "<" => "k", "@" => "l", "a" => "m", "b" => "n", "c" => "o", 
    "d" => "p", "e" => "q", "f" => "r", "g" => "s", "h" => "t", 
    "i" => "u", "j" => "v", "k" => "w", "l" => "x", "m" => "y", "n" => "z"
);

// Funkcja do deszyfrowania
function deszyfruj($tekst, $klucz) {
    $wynik = '';
    for ($i = 0; $i < strlen($tekst); $i++) {
        $znak = $tekst[$i];
        $wynik .= array_key_exists($znak, $klucz) ? $klucz[$znak] : $znak;
    }
    return $wynik;
}

// Funkcja do szyfrowania
function szyfruj($tekst, $klucz) {
    $odwrocony_klucz = array_flip($klucz);
    $wynik = '';
    for ($i = 0; $i < strlen($tekst); $i++) {
        $znak = $tekst[$i];
        $wynik .= array_key_exists($znak, $odwrocony_klucz) ? $odwrocony_klucz[$znak] : $znak;
    }
    return $wynik;
}

// Testowanie
$zaszyfrowana_wiadomosc = "1 )g!ld, j(!ad \"> h>£ gdol>!o!\" o!(!c>£";
$odszyfrowana_wiadomosc = deszyfruj($zaszyfrowana_wiadomosc, $klucz);
echo "Odszyfrowana wiadomość: " . $odszyfrowana_wiadomosc . "\n";

$do_zaszyfrowania = "Zażółć, gęślą jaźń.";
$zaszyfrowana = szyfruj($do_zaszyfrowania, $klucz);
echo "Zaszyfrowana wiadomość: " . $zaszyfrowana . "\n";
$ponownie_odszyfrowana = deszyfruj($zaszyfrowana, $klucz);
echo "Ponownie odszyfrowana wiadomość: " . $ponownie_odszyfrowana . "\n";
?>
