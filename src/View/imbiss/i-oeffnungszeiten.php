<?php
/*
 * benötigt: Filialen-ID -> $idxFil
 * Konfigurationsdatei für die Filialen: src/Configuration/filialen.json
 */
$jsonFilialen = file_get_contents('src/Configuration/oeffnung.json');
$arFilialen = json_decode($jsonFilialen, true);

$flagOnOff = $_GET['flagOnOff'];
$idxBox = $_GET['idxBox'];

if ($idxBox == 'oeffZeit') {

  /* Die anderen Boxen auf 'OFF' setzen */
  $idxBoxAnschrift = '';
  $idxBoxAngebote = '';


 switch ($flagOnOff) {
  case 'off':
   /* Box geschlossen */
   echo '
      <!-- Infobox Öffnungszeiten -->

      <div id="wrapper-oeffnungszeiten" class="box-shadow box-bgc">
        <div id="label-wrapper">
          <a href="index.php?idx=' . $idx . '&idxFil=' . $idxFil . '&idxBox=oeffZeit&flagOnOff=on#wrapper-oeffnungszeiten">
            <i class="far fa-arrow-alt-circle-down"></i><span class="font-petite-caps-red">Geöffnet nur für Euch</span>
          </a>
        </div>
      </div>';
   break;
  case 'on':
   /* Box ausgeklappt */
   echo '
      <!-- Infobox Öffnungszeiten -->

      <div id="wrapper-oeffnungszeiten" class="box-shadow box-bgc">
        <div id="label-wrapper">
          <a href="index.php?idx=' . $idx . '&idxFil=' . $idxFil . '&idxBox=oeffZeit&flagOnOff=off#wrapper-oeffnungszeiten">
            <i class="far fa-arrow-alt-circle-up"></i><span class="font-petite-caps-red">Geöffnet nur für Euch</span>
          </a>';

   foreach ($arFilialen[$idxFil] as $a) {

    foreach ($a as $key => $b) {
     echo
      '<div id="wochentag"><span class="font-petite-caps-yellow">' . $key . '</span></div>
                <div id="wochentag-zeit">' . $b . '</div>';
    }
   }
   break;
  default:
   /* per DEFAULT ist Box immer geschlossen */
   echo '
  <!-- Infobox Öffnungszeiten -->

  <div id="wrapper-oeffnungszeiten" class="box-shadow box-bgc">
    <div id="label-wrapper">
      <a href="index.php?idx=' . $idx . '&idxFil=' . $idxFil . '&idxBox=oeffZeit&flagOnOff=on#wrapper-oeffnungszeiten">
        <i class="far fa-arrow-alt-circle-down"></i><span class="font-petite-caps-red">Geöffnet nur für Euch</span>
      </a>
    </div>
  </div>';
   break;
 }
} else {
  echo '
  <!-- Infobox Öffnungszeiten -->

  <div id="wrapper-oeffnungszeiten" class="box-shadow box-bgc">
    <div id="label-wrapper">
      <a href="index.php?idx=' . $idx . '&idxFil=' . $idxFil . '&idxBox=oeffZeit&flagOnOff=on#wrapper-oeffnungszeiten">
        <i class="far fa-arrow-alt-circle-down"></i><span class="font-petite-caps-red">Geöffnet nur für Euch</span>
      </a>
    </div>
  </div>';
}

?>
</div>
