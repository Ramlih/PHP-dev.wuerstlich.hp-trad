<?php
namespace Controller;
class My_Class
{
 public function __construct()
 {
    echo 'My_Class-1: ... in _construct() => aktuelle Methode: '.__METHOD__."<br>";
    echo 'My_Class-1: ... in _construct() => aktueller Namespace: '.__NAMESPACE__;
 }
}
