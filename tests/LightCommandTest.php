<?php


use Bootcamp\Patterns\Command\Light;
use Bootcamp\Patterns\Command\LightOffCommand;
use Bootcamp\Patterns\Command\LightOnCommand;
use Bootcamp\Patterns\Command\MySwitch;

class RateTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function it_can_switch_on_the_light()
    {
        $light = new Light('Luz del comedor');
        $lightOnCommand = new LightOnCommand($light);
        $switch = new MySwitch($lightOnCommand);
        $switch->buttonWasPressed();
        $this->assertEquals('Luz del comedor Encendida', $light->getState());
    }

    /**
     * @test
     */
    public function it_can_switch_off_the_light()
    {
        $light = new Light('Luz del comedor');
        $lightOffCommand = new LightOffCommand($light);
        $switch = new MySwitch($lightOffCommand);
        $switch->buttonWasPressed();
        $this->assertEquals('Luz del comedor Apagada', $light->getState());
    }
}