<?php
$jsonFilialen = file_get_contents('src/Configuration/filialen.json');
$arFilialen = json_decode($jsonFilialen, true);

foreach ($arFilialen[$idxFil] as $a) {
    $img = $a['image'];
}
?>

<!-- Details - Filialen - Image -->
<picture id="f-image">
  <source srcset="<?php echo $img; ?>-200.jpg" media="(max-width: 319px)">
  <source srcset="<?php echo $img; ?>-300.jpg" media="(min-width: 360px) and (max-width: 480px)">
  <source srcset="<?php echo $img; ?>-600.jpg" media="(min-width: 481px) and (max-width: 767px)">
  <!-- <source srcset="<?php /* echo $img; */ ?>-200.jpg" media="(min-width: 481px)"> -->
  <source srcset="<?php echo $img; ?>-500.jpg" media="(min-width: 768px) and (max-width: 1023px)">
  <source srcset="<?php echo $img; ?>-500.jpg" media="(min-width: 768px) and (max-width: 1023px) and (orientation: landscape)">
  <source srcset="<?php echo $img; ?>-300.jpg" media="(min-width: 1024px) and (max-width: 1280px)">
  <source srcset="<?php echo $img; ?>-700.jpg" media="(min-width: 1281px)">
  <img src="<?php echo $img; ?>-300.jpg" alt="" class="box-shadow">
</picture>



