<?php
class Autoloader
{

  #private $path = 'Hallo';
  public function __construct()
  {
    #echo 'AL-2: ... in __construct()...<br>';
    spl_autoload_register(array($this, 'load_class'));

  }

  public static function register()
  {
    #echo 'AL-1: ... in static function register<br>';
    new Autoloader();
  }

  public function load_class($class_name)
  {
    #echo 'AL-3: ... in load_class(): ' . $class_name . '<br>';
    $file = 'src/Libary/'.str_replace('\\', '/', $class_name) . '.php';
    #echo 'AL-4: ... in load_class()-> $file: ' . $file . '<br>';

    if (file_exists($file)) {
      #echo 'AL-5: ... in load_class()-> Datei existiert!: ' . $file . '<br>';

      require_once $file;
    }
  }
}
