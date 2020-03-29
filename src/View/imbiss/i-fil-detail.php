<?php
/*
 * benötigt: Filialen-ID -> $idxFil
 * Konfigurationsdatei für die Filialen: src/Configuration/filialen.json
 */
$jsonFilialen = file_get_contents('src/Configuration/filialen.json');
$arFilialen = json_decode($jsonFilialen, true);

foreach ($arFilialen[$idxFil] as $a) {
    $ort = $a['ort'];
    $strasse = $a['strasse'];
    $plz = $a['plz'];
    $telefon = $a['telefon'];
    $facebook = $a['facebook'];
}
?>

<!-- Details zu den Filialen -->
<div id="wrapper-details">
    <?php
    include 'src/View/imbiss/i-fil-bild.php';
    ?>
  <div id="wrapper-infos">
    <?php
    include 'src/View/imbiss/i-angebote.php';
    include 'src/View/imbiss/i-anschrift.php';
    include 'src/View/imbiss/i-oeffnungszeiten.php';
    ?>
  </div>
</div>
