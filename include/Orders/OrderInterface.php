<?php

namespace Orders;

interface OrderInterface
{

    public function addFood(\FoodInterface $food);

    public function getPrice();
}