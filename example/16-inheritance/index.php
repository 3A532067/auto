<?php

require 'Animal.php';
require 'Dog.php';
require 'Cat.php';

$dog = new Dog('Lucky');
$dogAxis = $dog->move(10, 20);

$cat = new Cat('Kitty');
$catAxis = $cat->move(10, 20);

echo '<pre>';
echo $dog->name.' is now at ('.$dogAxis['x'].', '.$dogAxis['y'].')'."\n";
echo $cat->name.' is now at ('.$catAxis['x'].', '.$catAxis['y'].')'."\n";
echo '</pre>';


/**
 * Created by PhpStorm.
 * User: User
 * Date: 2018/10/14
 * Time: 下午 04:38
 */