<?php
/**
 * Created by PhpStorm.
 * User: luckys
 * Date: 10/25/16
 * Time: 12:53 AM
 */

namespace Bootcamp\Patterns\Command;


class MySwitch
{
    private $command;

    /**
     * MySwitch constructor.
     * @param $command
     */
    public function __construct(Command $command)
    {
        $this->command = $command;
    }

    public function buttonWasPressed()
    {
        $this->command->execute();
    }
}