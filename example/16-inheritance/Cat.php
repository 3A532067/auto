<?php

class Cat extends Animal
{
    public function move($x, $y)
    {
        $x = $x - 10;
        $y = $y - 10;

        $this->axis['x'] += $x;
        $this->axis['y'] += $y;

        return $this->axis;
    }
}

/**
 * Created by PhpStorm.
 * User: User
 * Date: 2018/10/14
 * Time: 下午 04:39
 */