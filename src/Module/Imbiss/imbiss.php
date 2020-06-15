<?php
/**
 * Steuerdatei für das Modul IMBISS
 * src/Module/Imbiss/imbiss.php
 * Hier wird KEIN HTML verwendet
 * imbiss.php wird nur aufgerufen, wenn in article.php $idx auf IMBISS gesetzt wurde
 */

 /** Autoloader einbinden */
require_once('src/Libary/Autoload/Autoloader.php');

/** Auslesen der per GET oder/und POST übergebenen Parameter
 *  und Übergabe an die im Modul IMBISS erforderlichen Variablen
 */

foreach ($_GET as $key => $value) {
 $idxFil = $_GET['idxFil'];
 $idxStores = $_GET['idxStores'];
 $idxAngebot = $_GET['idxAngebot'];
}

if ($idxFil == '' && $idxStores == '' && $idxAngebot == '') {
 include 'src/View/imbiss/i-praeambel.php';
}

if ($idxStores == 'stores') {
 include 'src/View/imbiss/i-standortwahl.php';
 include 'src/View/imbiss/i-gutschein.php';
} else {
 if ($idxFil != '') {
  include 'src/View/imbiss/i-standortwahl.php';
  include 'src/View/imbiss/i-start-ueberschrift.php';
  include 'src/View/imbiss/i-fil-detail.php';
  include 'src/View/imbiss/i-gutschein.php';
 }

 if ($idxAngebot != '') {
  include 'src/View/imbiss/i-angebot.php';
 }
}
