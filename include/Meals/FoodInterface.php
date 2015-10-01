<?php
namespace Meals;

interface FoodInterface
{

    public function addExtraComponent($component);

    public function getPrice();

    public function getName();
}