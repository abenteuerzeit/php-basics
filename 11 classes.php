<?php
class Beverage
{
    private $color;
    protected $opacity;
    public $temperature;
    function __construct($temperature, $color)
    {
        $this->temperature = $temperature;
        $this->color = $color;
    }
    function setColor($c)
    {
        $this->color = strtolower($c);
    }
    function getColor()
    {
        return $this->color;
    }
    function getInfo()
    {
        return "This beverage is $this->temperature and $this->color.";
    }
}

class Milk extends Beverage
{
    function __construct()
    {
        $this->temperature = "cold";
    }
    function getInfo()
    {
        return parent::getInfo() . " I like my milk this way.";
    }
    function setOpacity($opacity)
    {
        $this->opacity = $opacity;
    }
}

$soda = new Beverage("cold", "black");
echo $soda->getInfo();


class AdamsUtils
{
    public static $the_answer = 42;
    public static function addTowel($string)
    {
        return $string . " and a towel.";
    }
}

$items = "I brought apples";
echo AdamsUtils::$the_answer;
echo AdamsUtils::addTowel($items);
