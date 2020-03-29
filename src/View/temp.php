
<h1 id="anker-speisen">Schlemmen wie die Fürsten</h1>
<!-- column -->
<div id="wrapper-speisen">
  <!-- linke Seite des Speisenangebotes -->
  <div id="wrapper-kategorie">
    <ul id="" class="">
  <?php

foreach ($arKategorien[$idxFil] as $a) {
    foreach ($a as $idxKat => $b) {
        echo '<li class="box-shadow"><a href="index.php?idx=imbiss&idxFil=' . $idxFil . '&idxAngebot=' . $idxAngebot . '&idxKat=' . $idxKat . '#anker-speisen" class="label-wt">' . $b . '</a></li>';
    }
}
?>
    </ul>
  </div>
  
<?php
/* Daten der gewählten Kategorie ermitteln und in rechte Seite einfügen */
if ($_GET['idxKat'] == '') {
    $idxKat = 1;
    ;
} else {
    $idxKat = $_GET['idxKat'];
}

switch ($idxKat) {
    case '1':
        {
            $jKategorie = file_get_contents('src/Configuration/kategorien-wurst.json');
            $arKategorie = json_decode($jKategorie, true);
            break;
        }
    case '2':
        {
            $jKategorie = file_get_contents('src/Configuration/kategorien-burger.json');
            $arKategorie = json_decode($jKategorie, true);
            break;
        }
    case '3':
        {
            $jKategorie = file_get_contents('src/Configuration/kategorien-mehr.json');
            $arKategorie = json_decode($jKategorie, true);
            break;
        }
    case '4':
        {
            $jKategorie = file_get_contents('src/Configuration/kategorien-kartoffel.json');
            $arKategorie = json_decode($jKategorie, true);
            break;
        }
    case '5':
        {
            $jKategorie = file_get_contents('src/Configuration/kategorien-getraenk.json');
            $arKategorie = json_decode($jKategorie, true);
            break;
        }
    case '6':
        {
            $jKategorie = file_get_contents('src/Configuration/kategorien-zusaetzlich.json');
            $arKategorie = json_decode($jKategorie, true);
            break;
        }
}
?>

<!-- rechte Seite des Speisenes -->
  <div id="speisen-rechte-seite" class="">
    <div id="kategorie-bezeichnung">
    <?php
    /* Bezeichnung für die gewählte Kategorie */
    foreach ($arKategorien[$idxFil] as $value) {
        $katBez = $value[$idxKat];
    }
    echo $katBez;
    ?>
    </div>
<?php
foreach ($arKategorie[$idxFil] as $value) {

    foreach ($value as $artikel => $komponente) {
        echo '
               <div id="wrapper-gericht" class="">
                    <div id="gericht-bezeichnung">' . $artikel . '</div>
                    <div id="gericht-komponenten">' . $komponente . '</div>
                </div>
                    ';
    }
}
$idxKat = '';
$katBez = '';
?>

  </div>
</div>
