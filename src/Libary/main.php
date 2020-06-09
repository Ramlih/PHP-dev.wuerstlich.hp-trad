<?php
use Controller\My_Class as MC;
use Controller\Main as Main;
use Daten\Main as DatenMain;
/**
 * Steuerdatei für OOP
 * wird eingebunden in die index.php
 */

echo 'ich bin main.php<br>';
require_once('src/Libary/Autoload/Autoloader.php');
Autoloader::register();

#$object = new MC();

echo '********** Hier Test für Controller\Main **********<br>';

$object = new Main();
echo $object->getMessage();
echo '<br>';
$newMessage = 'Jetzt habe ich eine neue Nachricht für Dich.<br>';
$object->setMessage($newMessage);
echo $object->getMessage().'<br>';

$newMessage2 = 'Die Nachricht wurde gelesen.<br>';
$object->setMessage($newMessage2);
echo '<br>'.$object->getMessage().'<br>';

echo '********** Hier Test für Daten\Main **********<br>';
$object2 = new DatenMain();