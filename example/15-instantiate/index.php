<?php

require 'Animal.php';

$myPet = new Animal('Lucky');
$name = $myPet->name;
$axis = $myPet->move(10, 20);

echo '<pre>';
echo 'My pet is '.$name."\n";
echo 'It\'s axis is ('.$axis['x'].', '.$axis['y'].')';
echo '</pre>';

/**
 * Created by PhpStorm.
 * User: User
 * Date: 2018/10/14
 * Time: 下午 04:36
 */