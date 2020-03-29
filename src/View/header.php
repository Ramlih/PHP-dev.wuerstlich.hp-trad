<?php
/*
 * Würstlich - Mobile Version
 * src/View/header.php
 */
$jsonHeader = file_get_contents('src/Configuration/header.json');
$arHeader = json_decode($jsonHeader, true);
?>

<div id="wrapper-img" >
  <picture id="header-img">
    <source srcset="src/Medien/Images/Header/header-image-1300.jpg" media="(min-width: 1281px)">
    <source srcset="src/Medien/Images/Header/header-image-1100.jpg" media="(min-width: 1024px) and (max-width: 1280px)">
    <source srcset="src/Medien/Images/Header/header-image-700.jpg" media="(min-width: 768px) and (max-width: 1024px) and (orientation: landscape)">
    <source srcset="src/Medien/Images/Header/header-image-700.jpg" media="(min-width: 768px) and (max-width: 1024px)">
    <source srcset="src/Medien/Images/Header/header-image-500.jpg" media="(min-width: 481px) and (max-width: 767px)">
    <source srcset="src/Medien/Images/Header/header-image-200.jpg" media="(max-width: 300px)">
    <source srcset="src/Medien/Images/Header/header-image-300.jpg" media="(max-width: 480px)">
    <img src="src/Medien/Images/Header/header-image-200.jpg" alt="Header" class="">
  </picture>
</div>

<!-- Navigation -->
<?php include 'src/View/navigation.php'; ?>


