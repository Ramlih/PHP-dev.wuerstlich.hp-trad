<div id="wrapper-angebote" class="box-shadow box-bgc">
    <div id="label-wrapper">
        <span class="font-petite-caps-red">Das bieten wir Euch an</span>
    </div>


    <?php
/* Datei: Imbiss/i-angebote.php */
$configFile = 'src/Configuration/filialen.json';

/**
 * Konfigurationsdatei für Filialen -> Konfiguration auslesen
 */
function getConfig($configFile)
{
    $jsonConfig = file_get_contents($configFile);
     return json_decode($jsonConfig, true);
}


function getFilialen($configFile)
{
    return getConfig($configFile);
}

foreach(getFilialen($configFile)[$idxFil] as $value){
  $pfadWochenkarte = $value['wochenkarte'];
  $pfadSpeisekarte = $value['speisekarte'];
}

switch ($idxFil) {
    case 1: {
      echo '
      <!-- Angebot - Speisen: '.$idxFil.' -->
      <div id="angebote">
        <ul>
          <li>
          <a href="'.$pfadSpeisekarte.'">
          <span class="font-petite-caps-yellow">
            Speisekarte (<span>als pdf</span> <i class="fas fa-file-pdf"></i> )
          </span>
        </a>
          </li>          
        </ul>
      </div>
      ';
      break;
    }
    case 2: {
      echo '
      <!-- Angebot - Speisen: '.$idxFil.' -->
      <div id="angebote">
        <ul>
        <li>
        <a href="'.$pfadSpeisekarte.'">
        <span class="font-petite-caps-yellow">
          Speisekarte (<span>als pdf</span> <i class="fas fa-file-pdf"></i> )
        </span>
      </a>
        </li>       
          <li>
            <a href="'.$pfadWochenkarte.'">
              <span class="font-petite-caps-yellow">Wochenkarte (<span>als pdf</span> <i class="fas fa-file-pdf"></i> )</span>
            </a>
          </li>
        </ul>
      </div>
      ';
      break;
    }
    case 3: {
      echo '
      <!-- Angebot - Speisen: '.$idxFil.' -->
      <div id="angebote">
        <ul>
          <li>
          <a href="'.$pfadSpeisekarte.'">
              <span class="font-petite-caps-yellow">
                Speisekarte (<span>als pdf</span> <i class="fas fa-file-pdf"></i> )
              </span>
            </a>
          </li>
          <li>
            <a href="index.php?idx='.$idx.'&idxFil='.$idxFil.'&idxAngebot=burger#anker-burger">
              <span class="font-petite-caps-yellow">Burger des Monats</span>
            </a>
          </li>
        </ul>
      </div>
      ';
      break;
    }
    case 4: {
      echo '
      <!-- Angebot - Speisen: '.$idxFil.' -->
      <div id="angebote">
        <ul>
          <li>
          <a href="'.$pfadSpeisekarte.'">
              <span class="font-petite-caps-yellow">Speisekarte (<span>als pdf</span> <i class="fas fa-file-pdf"></i> )</span>
            </a>
          </li>
          <li>
            <a href="'.$pfadWochenkarte.'">
              <span class="font-petite-caps-yellow">Wochenkarte (<span>als pdf</span> <i class="fas fa-file-pdf"></i> )</span>
            </a>
          </li>
        </ul>
      </div>
      <div id="wrapper-burger-des-monats" class="box-shadow">
            <p id="anker-burger"  class="font-petite-caps-red">Neu im Angebot!</p>

            <div id="burger-des-monats">
                <p id="bezeichnung" class="font-petite-caps-yellow">Der Chili-Cheeseburger</p>
                
                <picture id="picture-burger-des-monats">
                <source srcset="src/Medien/Images/burger/chilicheeseburger-600.jpg" media="(min-width: 1281px)">
                <source srcset="src/Medien/Images/burger/chilicheeseburger-600.jpg" media="(min-width: 1024px) and (max-width: 1280px)">
                <source srcset="src/Medien/Images/burger/chilicheeseburger-600.jpg" media="(min-width: 768px) and (max-width: 1024px) and (orientation: landscape)">
                <source srcset="src/Medien/Images/burger/chilicheeseburger-600.jpg" media="(min-width: 768px) and (max-width: 1024px)">
                <source srcset="src/Medien/Images/burger/chilicheeseburger-300.jpg" media="(min-width: 481px) and (max-width: 767px)">
                <source srcset="src/Medien/Images/burger/chilicheeseburger-200.jpg" media="(max-width: 300px)">
                <source srcset="src/Medien/Images/burger/chilicheeseburger-300.jpg" media="(max-width: 480px)">
                <img src="src/Medien/Images/burger/chilicheeseburger-200.jpg" alt="Header" class="box-shadow">
                </picture>
            </div

            <div id="burger-des-monats-bschreibung">
                <p id="komponenten">100% Rindfleisch, Käse, Jalapenos, Salat, Gewürzgurken, Röstzwiebeln, Majonnaise-Lauch-Creme, Firecrackersoße</p>
                <p id="preis" class="font-petite-caps-yellow">Das Ganze für nur 4,50 €!</p>
            </div>
      ';
      break;
    }
    default:
        ;
        break;
}
?>
</div>
