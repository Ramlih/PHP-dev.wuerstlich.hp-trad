<?php
/**
 * View/article.php
 * article.php wird in den Container <article> in index.php geladen
 * Anhand des per GET oder/und POST übergebenen Parameters wird das Laden
 * folgender Module gesteuert:
 * - IMBISS => imbiss.php
 * - CATERING => catering.php
 * - IMPRESSUM => impressum.php
 * - DATENSCHUTZERKLÄRUNG => datenschutzerklaerung.php
 */

if ($_GET['idx'] != '') {
 $idx = $_GET['idx'];
} else {
 $idx = 'imbiss';
}

switch ($idx) {
 case 'impr':
  include 'src/View/impressum.php';
  break;
 case 'dse':
  include 'src/View/datenschutzerklaerung.php';
  break;
 case 'imbiss':
  include 'src/View/imbiss/imbiss.php';
  break;
 case 'catering':
  include 'src/View/catering/c-events.php';
  break;
 default:
  include 'src/View/imbiss/imbiss.php';
  break;
}
