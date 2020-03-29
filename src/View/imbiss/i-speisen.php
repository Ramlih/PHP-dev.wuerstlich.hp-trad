<?php
/* Datei: Imbiss/i-speisen.php */
$configFile = 'src/Configuration/speisen-kategorien.json';

/**
 * Konfigurationsdatei für Speiseangebot -> Angebots-Kategorien auslesen
 */
function getConfig($configFile)
{
    $jsonConfig = file_get_contents($configFile);
     return json_decode($jsonConfig, true);
}


function getKategorien($configFile)
{
    return getConfig($configFile);
}

/* Wenn idxBox = Speiseangebot
dann [Code]
Sonst Default-Zustand */
if ($idxBox == 'speisen') {
    # code...
} else {
    /* Default-Zustand */
    /* Kategorien ermitteln */
    $arKategorien = getKategorien($configFile);
    ?>
    <!-- Boxen geschlossen, nur Speise-Kategorien geöffnet: DEFAULT - Zustand -->
    <!-- Datei: Imbiss/i-speisen.php -->
    <div id="wrapper-speiseangebot" class=" box-shadow-yellow">
    <p id="speiseangebot-ueberschrift" class="font-petite-caps-red">Speisekarte</p>
    <?php
    foreach($arKategorien as $value){
        echo 
        '
        <div id="speiseangebot-kategorie" class="box-shadow-red">
        <div id="speiseangebot-kategorie-bezeichnung" class="">
            <a href="index.php?idx='.$idx.'&idxFil='.$idxFil.'&idxBox='.$idxBox.'&flagOnOff=on#speiseangebot-kategorie-bezeichnung">
                <span class="far fa-arrow-alt-circle-down"></span>
                <span class="font-petite-caps-yellow">'.$value.'</span>
            </a>
        </div>
    </div>
        ';
    }}
    ?>
    </div>

<!-- Box ausgeklappt - Gerichte geschlossen (nur Burger) -->
<!-- Datei: Imbiss/i-speisen.php -->
<!-- <div id="wrapper-speiseangebot" class=" box-shadow-yellow">
    <p id="speiseangebot-ueberschrift" class="font-petite-caps-red">Speisekarte</p>
    <div id="speiseangebot-kategorie" class="box-shadow-red">
        <div id="speiseangebot-kategorie-bezeichnung">
            <a href="idx='.$idx.'&idxFil='.$idxFil.'&idxBox='.$idxBox.'&flagOnOff=off#speiseangebot-kategorie-bezeichnung">
                <span class="far fa-arrow-alt-circle-up"></span>
                <span class="font-petite-caps-yellow">[Kategorie-Bezeichnung]</span>
            </a>
        </div>
    </div>
    <div id="speiseangebot-gerichte">
        <div id="gerichte-bezeichnung">Gericht</div>
        <div id="gerichte-komponenten">
            <p id="komponenten">Komponente</p>
        </div>
    </div>
</div> -->

<!-- Boxen geschlossen, nur Speise-Kategorien geöffnet: DEFAULT - Zustand -->
<!-- Datei: Imbiss/i-speisen.php -->
<!-- <div id="wrapper-speiseangebot" class=" box-shadow-yellow">
    <p id="speiseangebot-ueberschrift" class="font-petite-caps-red">Speiseangebot</p>
    <div id="speiseangebot-kategorie" class="box-shadow-red">
        <div id="speiseangebot-kategorie-bezeichnung" class="">
            <a href="index.php?idx='.$idx.'&idxFil='.$idxFil.'&idxBox='.$idxBox.'&flagOnOff=on#speiseangebot-kategorie-bezeichnung">
                <span class="far fa-arrow-alt-circle-down"></span>
                <span class="font-petite-caps-yellow">[Kategorie-Bezeichnung]</span>
            </a>
        </div>
    </div>
</div> -->
