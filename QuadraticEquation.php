<?php
/**
 * Created by PhpStorm.
 * User: chungtran
 * Date: 24/01/2019
 * Time: 11:16
 */

class QuadraticEquation
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function getC()
    {
        return $this->c;
    }

    public function getDiscriminant()
    {
        return (($this->b * $this->b) - (4 * $this->a * $this->c));
    }

    public function getRoot1()
    {
        return ((-1 * $this->b + sqrt($this->getDiscriminant())) / (2 * $this->a));
    }

    public function getRoot2()
    {
        return ((-1 * $this->b - sqrt($this->getDiscriminant())) / (2 * $this->a));
    }

    public function getRoot()
    {
        return (-$this->b / (2 * $this->a));
    }
}