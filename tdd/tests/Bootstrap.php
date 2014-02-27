<?php


class Bootstrap extends PHPUnit
{
    protected $Model;
    
    public function setUp($model)
    {
        $this->Model = $model;
    }
}
