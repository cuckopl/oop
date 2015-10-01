<?php

namespace Orders;

class Order implements OrderInterface
{
    /**
     * @property \FoodInterface  $foods
     */
    protected $foods = array();

    /**
     * * @property boolen  $isCounted
     */
    protected $isSummed = false;

    /**
     *  @property float  $foods
     */
    protected $orderCost = 0;

    /**
     * @param \FoodInterface $food
     */
    public function addFood(\Meals\FoodInterface $food)
    {
        $this->isSummed = false;
        $this->foods[]  = $food;
    }

    /**
     * same as addFood but takes Array of foods
     * @param array $foods
     * @return \Orders\Order
     */
    public function addFoods(array $foods)
    {
        $this->isSummed = false;
        foreach ($foods as $food) {
            if ($food instanceof \Meals\FoodInterface) {
                $this->foods[] = $food;
            }
        }
        return $this;
    }

    /**
     * @return flaot
     */
    protected function sumFoodPrices()
    {
        $sum = 0;
        foreach ($this->foods as $food) {
            $sum+=$food->getPrice();
        }
        $this->isSummed  = true;
        $this->orderCost = $sum;
        return $sum;
    }

    /**
     * @return type
     */
    public function getPrice()
    {
        if ($this->isSummed) {
            return $this->orderCost;
        }


        return $this->sumFoodPrices();
    }
}