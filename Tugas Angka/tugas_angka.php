<?php

function solve_psycho_test() {
    // Deret a
    $a = [4, 6, 9, 13, 18];
    $a[] = $a[count($a)-1] + 6; // 18 + 6 = 24
    $a[] = $a[count($a)-1] + 7; // 24 + 7 = 31

    // Deret b
    $b = [2, 2, 3, 3, 4];
    $b[] = 4; // Ulang angka 4
    $b[] = 5; // Tambah angka 5 dua kali

    // Deret c
    $c = [1, 9, 2, 10, 3];
    $c[] = 4; // Angka pertama naik jadi 4
    $c[] = 11; // Angka kedua naik jadi 11

    echo "Deret a: " . implode(", ", $a) . "\n";
    echo "Deret b: " . implode(", ", $b) . "\n";
    echo "Deret c: " . implode(", ", $c) . "\n";
}

solve_psycho_test();

?>