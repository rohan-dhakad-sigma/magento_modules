<?php
/**
 * Created by PhpStorm.
 * User: sigma
 * Date: 24/8/22
 * Time: 3:21 PM
 */

namespace Dependency\Inject\Model;
use Dependency\Inject\Api\Color;


class Red implements Color
{

    public function getColor()
    {
        return "Red";
    }
}