<?php
/*
 * Würstlich
 * index.php
 */
?>
<!Doctype html>
<html lang="de">

    <head>
        <!-- Head -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <meta name="theme-color" content="#ff0000">
        <link rel="shortcut icon" href="favicon.ico">
        <!-- iOS Safari -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="viewport" content="initial-scale=1, viewport-fit=cover">
        <meta name="author" content="Würstlich">
        <meta name="date" content="2020-01-15T15:51:37+01:00">
        <meta name="description" content="Würstlich genießen in Sachsen-Anhalt">
        <meta name="keywords" lang="de" content="Würstlich, genießen, Burger, Bratwurst, Currywurst">
        <meta name="keywords" lang="de"
            content="Landeshauptstadt, Sachsen-Anhalt, Magdeburg, Haldensleben, Oschersleben">
        <meta name="format-detection" content="telephone=yes">
        <title>Würstlich genießen</title>
        <!-- <link rel="stylesheet" href="src/CSS/main.css">
        <link rel="stylesheet" href="src/CSS/klassen.css"> -->
        <!-- Für unterschiedliche Geräteklassen -->
        <!-- <link rel="stylesheet" media="(max-width: 480px)" href="src/CSS/smarphones-portrait-max-480.css">
        <link rel="stylesheet" media="(min-width: 481px)" href="src/CSS/tablet-mobile-portrait-481-767.css">
        <link rel="stylesheet" media="(min-width: 481px)" href="src/CSS/tablet-mobile-landscape-481-767.css">
        <link rel="stylesheet" media="(min-width: 768px)" href="src/CSS/tablet-ipad-portrait-768-1024.css">
        <link rel="stylesheet" media="(min-width: 768px)" href="src/CSS/tablet-ipad-landscape-768-1024.css">
        <link rel="stylesheet" media="(min-width: 1025px)" href="src/CSS/laptop-desktop-1025-1280.css">
        <link rel="stylesheet" media="(min-width: 1281px)" href="src/CSS/desktop-min-1281.css"> -->
        <link rel="stylesheet" href="src/CSS/normalize.css">
        <script src="https://kit.fontawesome.com/6bcf77b36a.js" crossorigin="anonymous"></script>
    </head>

    <body>
    <?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);    
    
    require('src/Libary/main.php');

     ?>
        <main>
        

            <!-- Beginn HEADER -->
            <header>
                <?php #include 'src/View/header.php'; ?>
            </header>

            <!-- Beginn ARTICLE -->
            <article>
              <?php 
                #include 'src/View/article.php';
              ?>
            </article>

            <!-- Beginn FOOTER -->
            <footer>
                <?php #include 'src/View/footer.php'; ?>
            </footer> 
        </main>
    </body>

    <!-- Start Cookie Plugin -->
    <script type="text/javascript">
    window.CookieHinweis_options = {
        message: 'Diese Website nutzt Cookies, um bestmögliche Funktionalität bieten zu können.',
        agree: 'Ok, verstanden',
        learnMore: 'Mehr Infos',
        link: 'https://www.wuerstlich.de/?dse=1',
        /* Link zu den eigenen Datenschutzbestimmungen */
        theme: 'dunkel-unten' /* weitere Theme-Optionen sind dunkel-oben oder hell-unten-rechts */
    };
    </script>
    <script type="text/javascript" src="https://s3.eu-central-1.amazonaws.com/website-tutor/cookiehinweis/script.js"></script>
    <!-- Ende Cookie Plugin -->

</html>