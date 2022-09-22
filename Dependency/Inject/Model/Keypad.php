<?php
/**
 * Created by PhpStorm.
 * User: sigma
 * Date: 26/8/22
 * Time: 11:59 AM
 */

namespace Dependency\Inject\Model;


use Dependency\Inject\Api\MobileInterface;

class Keypad implements MobileInterface
{

    public function getMobileType()
    {
        return "Keypad phone";
    }
}