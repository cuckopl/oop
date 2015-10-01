<?php
require('app/init.php');

$lunch = \Factories\LunchFactory::makeLunch(\Meals\Food::MEXICAN_KITCHEN);
$drink = new Meals\Drink('Cola', 10);
$drink->addExtraComponent('Ice');

$order = new Orders\Order();
$order->addFood($drink);
$order->addFoods($lunch);


echo $order->getPrice();
