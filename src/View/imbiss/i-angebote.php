<div id="wrapper-angebote" class="box-shadow box-bgc">
    <div id="label-wrapper">
        <span class="font-petite-caps-red">Das bieten wir Euch an</span>
    </div>


    <?php
switch ($idxFil) {
    case 1: {
      echo '
      <!-- Angebot - Speisen: '.$idxFil.' -->
      <div id="angebote">
        <ul>
          <li>
            <a href="index.php?idx='.$idx.'&idxFil='.$idxFil.'&idxAngebot=speisen#wrapper-speiseangebot">
              <span class="font-petite-caps-yellow">Speisekarte</span>
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
            <a href="index.php?idx='.$idx.'&idxFil='.$idxFil.'&idxAngebot=speisen#wrapper-speiseangebot">
              <span class="font-petite-caps-yellow">Speisekarte</span>
            </a>
          </li>
          <li>
            <a href="src/Medien/Download/Wochenkarte30.03.20_RS.pdf">
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
          <!-- <li><a href="index.php?idx='.$idx.'&idxFil='.$idxFil.'&idxAngebot=speisen#wrapper-speiseangebot"><span class="font-petite-caps-yellow">Speisekarte</span></a></li> -->
          <!-- <li><a href="src/Medien/Download/speisekarte-oc-2020_klein.pdf"><span class="font-petite-caps-yellow">Speisekarte (als pdf <i class="fas fa-file-pdf"></i> )</span></a></li> -->
          <li>
            <a href="src/Medien/Download/speisekarte-oc-2020_portrait.pdf">
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
            <a href="src/Medien/Download/speisekarte-hdl-2020-portrait.pdf">
              <span class="font-petite-caps-yellow">Speisekarte (<span>als pdf</span> <i class="fas fa-file-pdf"></i> )</span>
            </a>
          </li>
          <li>
            <a href="src/Medien/Download/Wochenkarte 30.03 bis 03.04_HDL.pdf">
              <span class="font-petite-caps-yellow">Wochenkarte (<span>als pdf</span> <i class="fas fa-file-pdf"></i> )</span>
            </a>
          </li>
        </ul>
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