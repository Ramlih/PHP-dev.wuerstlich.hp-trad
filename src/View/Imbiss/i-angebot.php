<div id="wrapper-angebot">
    <?php
        switch ($idxAngebot) {
            case 'speisen':
                include 'src/View/imbiss/i-speisen.php';
                break;
            case 'wochenangebot':
                include 'src/View/imbiss/i-wochenangebot.php';
                break;
            case 'burger':
                include 'src/View/imbiss/i-burger.des.monats.php';
                break;
            case 'bonus':
                include 'src/View/imbiss/i-bonus.php';
                break;                    
            default:
                # code...
                break;
        }
    ?>
</div>