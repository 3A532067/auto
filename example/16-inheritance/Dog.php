<?php

class Dog extends Animal
{
    public function move($x, $y)
    {
        $x = $x + 20;
        $y = $y + 20;

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