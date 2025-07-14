<?php
function sapa($nama, $waktu) {
    $waktu = strtolower($waktu); // Konversi ke lowercase untuk konsistensi
    $pesan = "";
    
    switch ($waktu) {
        case 'pagi':
            $pesan = "Selamat Pagi";
            break;
        case 'siang':
            $pesan = "Selamat Siang";
            break;
        case 'sore':
            $pesan = "Selamat Sore";
            break;
        case 'malam':
            $pesan = "Selamat Malam";
            break;
        default:
            $pesan = "Halo";
    }
    
    return $pesan . ", " . $nama . "!";
}

// Contoh penggunaan
echo sapa("Budi", "Pagi");  // Output: Selamat Pagi, Budi!
echo "<br>";
echo sapa("Andi", "Malam");  // Output: Selamat Malam, Ani!
echo "<br>";
echo sapa("Dani", "Siang"); // Output: Selamat Siang, Doni!
?>