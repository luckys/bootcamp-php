<?php
/**
 * Created by PhpStorm.
 * User: luckys
 * Date: 10/25/16
 * Time: 12:49 AM
 */

namespace Bootcamp\Patterns\Command;


interface Command
{
    /**
     * @return mixed
     */
    public function execute();
}