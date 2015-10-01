<?php

namespace Factories;

class LunchFactory
{

    /**
     *
     * @return array \FoodInterface
     */
    public static function makeLunch($kitchen)
    {
        $lunch   = array();
        $lunch[] = new \Meals\MainCourse('Main Course', 150, $kitchen);
        $lunch[] = new \Meals\Dessert('Dessert', 20, $kitchen);
        return $lunch;
    }
}