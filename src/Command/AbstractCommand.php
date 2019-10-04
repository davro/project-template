<?php
namespace ProjectTemplate\Command;

use \ProjectTemplate\Command\Receiver;

abstract class AbstractCommand
{
    /**
     * @var Receiver
     */
    protected $console;
    
    /**
     * The constructor that takes the console
     *
     * @param Receiver $console
     */
    public function __construct(Receiver $console)
    {
        $this->console = $console;
    }
    
    /**
     * Console helper function for writing
     * 
     * @param mixed $line
     */
    public function write($line)
    {
        if ($this->console instanceof Receiver) {
            $this->console->write($line);
        }
    }
    
    /**
     * Getter for retrieving the filename
     * 
     * @param string $path
     * @return string
     * @throws \Exception
     */
    public function getFilename($path = '')
    {
        if (!isset($_SERVER['argv'][0]) || !is_file($_SERVER['argv'][0])) {
            throw new \Exception("Command :: Missing file\n");
        }
        $action = $_SERVER['argv'][0];
        
        return $action;
    }
    
    /**
     * Getter for retrieving argument vectors
     * 
     * @param bool $number
     * @return null
     */
    public function getArgv($number)
    {
        if (isset($_SERVER['argv'][$number])) {
            return $_SERVER['argv'][$number];
        }
        return;
    }
}
