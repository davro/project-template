<?php
namespace ProjectTemplate\Command;

class Invoker
{
    /**
     * @var CommandInterface
     */
    private $command;
    
    /**
     * Setter for adding a command
     * 
     * @param \ProjectTemplate\Command\CommandInterface $command
     */
    public function setCommand(CommandInterface $command)
    {
        $this->command = $command;
    }
    
    /**
     * Run method for executing a command
     */
    public function run()
    {
        $this->command->execute();
    }
}
