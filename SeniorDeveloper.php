<?php
require_once('Worker.php');
class SeniorDeveloper extends Worker
{
     function __construct( $name, $familia, $otchestvo,  $money,  $hour)
    {
        parent::__construct($name, $familia, $otchestvo,  $money,  $hour);
    }
}