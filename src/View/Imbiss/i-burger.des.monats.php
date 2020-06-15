<?php
$jsonBurger = file_get_contents('src/Configuration/i-burger.des.monats.json');
$arBurger = json_decode($jsonBurger, true);

foreach($arBurger as $idxFil ) {
    foreach($idxFil as $key){
        echo '
        <div id="wrapper-burger-des-monats" class="box-shadow">
            <p id="anker-burger"  class="font-petite-caps-red">'.$key['ankuendigung'].'</p>
            <p id="anpreisen">'.$key['anpreisen'].'</p>

            <div id="burger-des-monats">
                <p id="bezeichnung" class="font-petite-caps-yellow">'.$key['bezeichnung'].'</p>
                
                <picture id="picture-burger-des-monats">
                <source srcset="'.$key['burger-img-src-600'].'" media="(min-width: 1281px)">
                <source srcset="'.$key['burger-img-src-600'].'" media="(min-width: 1024px) and (max-width: 1280px)">
                <source srcset="'.$key['burger-img-src-600'].'" media="(min-width: 768px) and (max-width: 1024px) and (orientation: landscape)">
                <source srcset="'.$key['burger-img-src-600'].'" media="(min-width: 768px) and (max-width: 1024px)">
                <source srcset="'.$key['burger-img-src-300'].'" media="(min-width: 481px) and (max-width: 767px)">
                <source srcset="'.$key['burger-img-src-200'].'" media="(max-width: 300px)">
                <source srcset="'.$key['burger-img-src-300'].'" media="(max-width: 480px)">
                <img src="'.$key['burger-img-src-200'].'" alt="Header" class="box-shadow">
                </picture>
            </div

            <div id="burger-des-monats-bschreibung">
                <p id="komponenten">'.$key['komponenten'].'</p>
                <p id="preis" class="font-petite-caps-yellow">'.$key['preis'].'</p>
            </div>
        </div>
        ';
    }
}
?>