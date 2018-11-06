<?php

class QuadEquation
{
    private $a;
    private $b;
    private $c;

    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getDelta()
    {
        return $this->b ** 2 - 4 * $this->a * $this->c;
    }

    public function getRoot1()
    {
        return (-$this->b + sqrt($this->b**2-4*$this->a*$this->c))/(2*$this->a);
    }

    public function getRoot2()
    {
        return (-$this->b - sqrt($this->b**2-4*$this->a*$this->c))/(2*$this->a);
    }

}

$quadEquation = new QuadEquation(5,10,2);
echo $quadEquation->getDelta();
echo $quadEquation->getRoot1();