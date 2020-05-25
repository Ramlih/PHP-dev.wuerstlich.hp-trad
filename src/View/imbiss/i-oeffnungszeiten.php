<?php
/*
 * benötigt: Filialen-ID -> $idxFil
 * Konfigurationsdatei für die Filialen: src/Configuration/filialen.json
 */
$jsonFilialen = file_get_contents('src/Configuration/oeffnung.json');
$arFilialen = json_decode($jsonFilialen, true);

echo '
      <!-- Infobox Öffnungszeiten -->

      <div id="wrapper-oeffnungszeiten" class="box-shadow box-bgc">
        <div id="label-wrapper"><span class="font-petite-caps-red">Geöffnet nur für Euch</span>';

foreach ($arFilialen[$idxFil] as $a) {

 foreach ($a as $key => $b) {
  echo
   '<div id="wochentag"><span class="font-petite-caps-yellow">' . $key . '</span></div>
                <div id="wochentag-zeit">' . $b . '</div>';
 }
}

?>
</div>
