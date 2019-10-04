<?php
namespace ProjectTemplate\Command;

use \ProjectTemplate\Command\AbstractCommand;
use \ProjectTemplate\Command\CommandTrait;

/**
 * ExampleCommand
 * 
 * Concrete trait driven object to test the AbstractCommand interface
 * The Receiver object is called when write is executed.
 */
class ExampleCommand extends AbstractCommand implements CommandInterface
{
    use CommandTrait;
}
