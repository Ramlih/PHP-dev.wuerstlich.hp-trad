<h1><span  class="font-petite-caps-red">Unsere Events</span></h1>
<p><span  class="font-petite-caps-yellow">Informationen dazu:</span></p>
<p><span class="fas fa-phone-volume"></span> 0173 2398011 </p>
<p><span class="fas fa-envelope"></span> info@wuerstlich.de</p>

<div id="wrapper-c-events">
<?php
$jsonEvents = file_get_contents('src/Configuration/c-event-2019.json');
$arEvents = json_decode($jsonEvents, true);

//print_r($arEvents);

foreach($arEvents as $arSection) {
    foreach ($arSection as $value) {
        echo
        '
        <!-- Zeile 1: Bild und Beschreibung; Flex: row    -->
    <div id="wrapper-c-events-zeile1">
        <picture id="c-event-picture">
            <source srcset="'.$value['img-src-400'].'" media="(min-width: 1281px)">
            <source srcset="'.$value['img-src-400'].'" media="(min-width: 1024px) and (max-width: 1280px)">
            <source srcset="'.$value['img-src-400'].'" media="(min-width: 768px) and (max-width: 1024px) and (orientation: landscape)">
            <source srcset="'.$value['img-src-400'].'" media="(min-width: 768px) and (max-width: 1024px)">
            <source srcset="'.$value['img-src-500'].'" media="(min-width: 481px) and (max-width: 767px)">
            <source srcset="'.$value['img-src-500'].'" media="(min-width: 481px) and (orientation: landscape)">
            <source srcset="'.$value['img-src-200'].'" media="(max-width: 250px)">
            <source srcset="'.$value['img-src-300'].'" media="(max-width: 359px)">
            <source srcset="'.$value['img-src-400'].'" media="(min-width: 360px) and (max-width: 480px)">
            <img src="'.$value['img-src-100'].'" alt="Image Catering '.$value['event'].'" class="box-shadow">
        </picture>
        <div id="c-event-beschreibung">
            <h4 class="font-petite-caps-yellow">'.$value['event'].'</h4>
            <p>'.$value['ort'].'</p>
        </div>
    </div>
        ';
    }
}
?>
</div>
