<?php
/**
 * Created by PhpStorm.
 * User: damien
 * Date: 25/09/18
 * Time: 16:53
 */

require '../vendor/autoload.php';

$texte = new App\Wcs\Hello;
echo $texte -> talk().'<br>';



$texte2 = new HelloWorld\SayHello;
echo $texte2 -> world();