<?php

// Tę funkcję już powinieneś mieć (z poprzedniego kroku)
function srednia($a, $b) {
    return ($a + $b) / 2;
}

// --- TO JEST NOWA CZĘŚĆ (ŚREDNIA WAŻONA) ---

function srednia_wazona($a, $b, $waga1, $waga2) {
    // Wzór: (liczba1 * waga1 + liczba2 * waga2) / (suma wag)
    $licznik = ($a * $waga1) + ($b * $waga2);
    $mianownik = $waga1 + $waga2;
    
    // Zabezpieczenie przed dzieleniem przez zero
    if ($mianownik == 0) {
        return 0;
    }
    
    return $licznik / $mianownik;
}

// Przykładowe wywołanie (to tutaj będziesz później zmieniać wagi 7 i 3!)
echo "Srednia zwykla: " . srednia(4, 5) . "\n";
echo "Srednia wazona: " . srednia_wazona(4, 5, 7, 3);

?>