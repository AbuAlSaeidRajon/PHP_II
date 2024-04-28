<?php

require "Foo.php";

use Acme\Tools\Foo as SomeFooClass;

$foo = new SomeFooClass();

// $foo = new \Acme\Tools\Foo();

$foo->doAwesomeThings(); 

$dt = new DateTime();
echo $dt->getTimestamp()."\n";  