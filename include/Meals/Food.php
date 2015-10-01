<?php

namespace Meals;

abstract class Food implements FoodInterface
{
    const POLISH_KITCHEN  = 'Polish';
    const MEXICAN_KITCHEN = 'Mexico';
    const ITALIAN_KITCHEN = 'Italian';

    /**
     *
     * @var array
     */
    protected $kitchenTypes = array(
        self::ITALIAN_KITCHEN,
        self::MEXICAN_KITCHEN,
        self::POLISH_KITCHEN
    );

    /**
     * The list of ingredients
     *      We can also add how much cost component and count price
     *      by comnponents
     * @var array $components
     */
    protected $components;

    /**
     * Type of dish polish,mexico,italian
     * @var string $kitchenType
     */
    protected $kitchenType;

    /**
     *
     * @var string name
     */
    protected $name;

    /**
     * Price of Food
     * @var float $price
     */
    protected $price;

    /**
     *
     * @param string $name
     * @param float $price
     */
    public function __construct($name, $price,
                                $kitchenType = self::POLISH_KITCHEN)
    {
        $this->name        = $name;
        $this->price       = $price;
        $this->checkKitchenType($kitchenType);
        $this->kitchenType = $kitchenType;
    }

    /**
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->type = $name;
    }

    /**
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->checkKitchenType($type);
        $this->type = $type;
    }

    /**
     *
     * @param string $component
     * @return \Meals\Food
     */
    public function addExtraComponent($component)
    {
        $this->components[] = $component;
        return $this;
    }

    /**
     *
     * @param string $type
     * @return boolean
     * @throws Exception
     */
    private function checkKitchenType($type)
    {
        $result = in_array($type, $this->kitchenTypes);

        if (!$result) {
            //schould be some InvalidFoodException
            throw new Exception(sprintf("We don't serve food from %s", $type));
        }

        return true;
    }
}