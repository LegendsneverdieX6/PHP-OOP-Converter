<?php

function Pet__construct(&$objInst, $name)
{
    echo 'Setting name to ' . $name . '
';
    $objInst['name'] = $name;
}
function Pet_eat(&$objInst)
{
    echo $objInst['name'] . ' is eating.
';
}
$Pet = array('__vars' => array('name' => null));
$a_pet = array_merge($GLOBALS['Pet']['__vars'], array('__type' => 'Pet'));
Pet__construct($a_pet, 'Spike');
function TestClass__construct(&$objInst)
{
    $test_pet = array_merge($GLOBALS['Pet']['__vars'], array('__type' => 'Pet'));
    Pet__construct($test_pet, 'Bowser');
}
$TestClass = array('__vars' => array());
$test = array_merge($GLOBALS['TestClass']['__vars'], array('__type' => 'TestClass'));
TestClass__construct($test);