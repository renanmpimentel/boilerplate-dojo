<?php

namespace Dojo\Tests;

include(__DIR__ . '/../vendor/autoload.php');

use Dojo\DojoPuzzles;

class DojoPuzzlesTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->DojoPuzzles = new DojoPuzzles();
    }

    public function testInstanceOf()
    {
        $this->assertInstanceOf('Dojo\DojoPuzzles', $this->DojoPuzzles);
    }
}
