<?php
/*
 * src/View/i-start-ueberschrift.php
 * wird aufgerufen von src/View/imbiss.php
 */
?>

<!-- <div id="wrapper-i-start"> -->
<div id="wrapper-standort-ueberschrift">
<?php
if ($idxFil != null) {
    switch ($idxFil)
    {
        case 1:
            {
                echo '<div id="standort-ueberschrift"><span class="font-petite-caps-red">Das sind wir - in Magdeburg am Toom-Baumarkt</span></div>';
                break;
            }
        case 2:
            {
                echo '<div id="standort-ueberschrift"><span class="font-petite-caps-red">Das sind wir - in Magdeburg im Gewerbegebiet in Rothensee</span></div>';
                break;
            }
        case 3:
            {
                echo '<div id="standort-ueberschrift"><span class="font-petite-caps-red">Das sind wir - in Oschersleben am Marktkauf</span></div>';
                break;
            }
        case 4:
            {
                echo '<div id="standort-ueberschrift"><span class="font-petite-caps-red">Das sind wir - in Haldensleben am Appel-Baumarkt</span></div>';
                break;
            }
    }
}
?>
</div>
