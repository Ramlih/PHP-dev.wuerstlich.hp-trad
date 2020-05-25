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
    $stempel = $a['stempel'];
}

/* nur temorär - wird nach imbiss.php ausgelagert */
$idxBox = $_GET['idxBox'];
$flagOnOff = $_GET['flagOnOff'];

echo '<!-- Infobox Anschrift -->';

if ($idxBox == 'anschrift') {
    switch($flagOnOff) 
    {
        /* Box ist geschlossen */
        case 'off':
            {
                echo '
                <div id="wrapper-anschrift" class="box-shadow box-bgc">
                    <div id="label-anschrift">
                        
                        <a href="index.php?idx=' . $idx . '&idxFil=' . $idxFil . '&idxBox=anschrift&flagOnOff=on#wrapper-anschrift">
                        <i class="far fa-arrow-alt-circle-down"></i><span class="font-petite-caps-red">Hier findet Ihr uns</span>
                        </a>
                        
                    </div>
    
                    
                </div>
                ';
            break;
            }
        
        /* Box ist offen (ausgeklappt) */
        case 'on':
            {

                echo '
                <div id="wrapper-anschrift" class="box-shadow box-bgc">
                    <div id="label-anschrift">
                        <a href="index.php?idx=' . $idx . '&idxFil=' . $idxFil . '&idxBox=anschrift&flagOnOff=off#wrapper-anschrift">
                        <i class="far fa-arrow-alt-circle-up"></i><span class="font-petite-caps-red">Hier findet Ihr uns</span>
                        </a>
                    </div>
    
                    <div id="strasse">'.$strasse.'</div>
                    <div id="plz-ort">'.$plz . ' ' . $ort.'</div>
                    <div id="telefon"><p> <span class="fas fa-phone-volume"></span> '.$telefon.' </p></div>
                    <div id="social-media">
                        <ul>
                            <li>
                                <p>
                                    <a href="'.$facebook.'">
                                        <img alt="" src="src/Medien/Images/Symbole/f_Logo_CMYK-U_Blue-40.png">Besucht uns mal! <span class="far fa-thumbs-up"></span>
                                    </a>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <img src="'.$stempel.'" alt="">
                    
                </div>
                ';
            break;
            }
        
        /* per DEFAULT ist Box geschlossen */    
        default:
            {
            echo '
            <div id="wrapper-anschrift" class="box-shadow box-bgc">
                <div id="label-anschrift">
                    
                    <a href="index.php?idx=' . $idx . '&idxFil=' . $idxFil . '&idxBox=anschrift&flagOnOff=on#wrapper-anschrift">
                    <i class="far fa-arrow-alt-circle-down"></i><span class="font-petite-caps-red">Hier findet Ihr uns</span>
                    </a>
                    
                </div>
            </div>
            ';
            break;
            }
    }
} else {
            echo '
            <div id="wrapper-anschrift" class="box-shadow box-bgc">
                <div id="label-anschrift">
                    
                    <a href="index.php?idx=' . $idx . '&idxFil=' . $idxFil . '&idxBox=anschrift&flagOnOff=on#wrapper-anschrift">
                    <i class="far fa-arrow-alt-circle-down"></i><span class="font-petite-caps-red">Hier findet Ihr uns</span>
                    </a>
                    
                </div>
            </div>
            ';
}

?>

