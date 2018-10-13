<?php

echo '<pre>';

// for loop
for ($i = 0; $i < 10; $i++) {
    echo $i."\n";
}

echo "\n\n";

// foreach loop
foreach(range(1, 10) as $index => $value) {
    echo 'index: '.$index.', value: '.$value."\n";
}

echo '</pre>';

?>

/**
 * Created by PhpStorm.
 * User: User
 * Date: 2018/10/13
 * Time: 下午 11:41
 */