<?php
// Klucz szyfrujący
$klucz = array(
    "!" => "a", ")" => "b", "\"" => "c", "(" => "d", "£" => "e", "*" => "f", "%" => "g", "&" => "h", ">" => "i", "<" => "j", "@" => "k", "a" => "l", "b" => "m", "c" => "n", "d" => "o", "e" => "p", "f" => "q", "g" => "r", "h" => "s", "i" => "t", "j" => "u", "k" => "v", "l" => "w", "m" => "x", "n" => "y", "o" => "z"
);

// Funkcja do deszyfrowania
function deszyfruj($tekst, $klucz) {
    $wynik = '';
    $dlugosc = mb_strlen($tekst);
    for ($i = 0; $i < $dlugosc; $i++) {
        $znak = mb_substr($tekst, $i, 1);
        $wynik .= array_key_exists($znak, $klucz) ? $klucz[$znak] : $znak;
    }
    return $wynik;
}

// Funkcja do szyfrowania
function szyfruj($tekst, $klucz) {
    $odwrocony_klucz = array_flip($klucz);
    $wynik = '';
    $dlugosc = mb_strlen($tekst);
    for ($i = 0; $i < $dlugosc; $i++) {
        $znak = mb_substr($tekst, $i, 1);
        $wynik .= array_key_exists($znak, $odwrocony_klucz) ? $odwrocony_klucz[$znak] : $znak;
    }
    return $wynik;
}

// Zaszyfrowana wiadomość
$zaszyfrowana_wiadomosc = ")g!ld, j(!ad \"> h>£ gdol>!o!\" o!(!c>£";

// Odszyfrowana wiadomość
$odszyfrowana_wiadomosc = deszyfruj($zaszyfrowana_wiadomosc, $klucz);
echo "Odszyfrowana wiadomość: " . $odszyfrowana_wiadomosc . "\n";

// Wiadomość do zaszyfrowania
$do_zaszyfrowania = "Zażółć, gęślą jaźń.";
$zaszyfrowana = szyfruj($do_zaszyfrowania, $klucz);
echo "Zaszyfrowana wiadomość: " . $zaszyfrowana . "\n";
$ponownie_odszyfrowana = deszyfruj($zaszyfrowana, $klucz);
echo "Ponownie odszyfrowana wiadomość: " . $ponownie_odszyfrowana . "\n";
?>
