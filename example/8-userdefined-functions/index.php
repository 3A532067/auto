<?php

echo '<pre>';

$string = "Hello, world";
echo strlen($string)."\n";

$search = 'world';
$replace = 'dolly';
echo str_replace($search, $replace, $string)."\n";

echo '</pre>';

?>

/**
 * Created by PhpStorm.
 * User: User
 * Date: 2018/10/13
 * Time: 下午 11:04
 */