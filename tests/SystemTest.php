<?php
namespace Tests;

use \PHPUnit\Framework\TestCase;
use \ProjectTemplate\System;

class SystemTest extends TestCase
{
    public function setUp() 
    {
        $this->system = new System();
    }
    
    public function testCommandLineInterface()
    {
        $this->assertTrue($this->system->isCli());
    }
}
