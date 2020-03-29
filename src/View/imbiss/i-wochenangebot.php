<?php
$jsonFilialen = file_get_contents('src/Configuration/filialen.json');
$arFilialen = json_decode($jsonFilialen, true);

foreach ($arFilialen[$idxFil] as $a) {
    $wochenangebot = $a['wochenangebot'];
}
?>
<div id="wrapper-wochenangebot">
  <picture id="wochenangebot">
    <img src="<?php echo $wochenangebot; ?>" alt="" class="box-shadow">
  </picture>
</div>