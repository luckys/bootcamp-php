<?php
/**
 * Created by PhpStorm.
 * User: luckys
 * Date: 10/25/16
 * Time: 12:50 AM
 */

namespace Bootcamp\Patterns\Command;


class LightOnCommand implements Command
{
    private $light;

    /**
     * LightOnCommand constructor.
     * @param $light
     */
    public function __construct(Light $light)
    {
        $this->light = $light;
    }


    /**
     * @return mixed
     */
    public function execute()
    {
        $this->light->on();
    }
}