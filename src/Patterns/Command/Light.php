<?php
/**
 * Created by PhpStorm.
 * User: luckys
 * Date: 10/25/16
 * Time: 12:51 AM
 */

namespace Bootcamp\Patterns\Command;


class Light
{
    private $name;
    private $state;

    /**
     * Light constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->name.' '.$this->state;
    }

    public function on(){
        $this->setState('Encendida');
    }

    public function off(){
        $this->setState('Apagada');
    }
}