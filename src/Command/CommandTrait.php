<?php
namespace ProjectTemplate\Command;

trait CommandTrait
{
    /**
     * Execute diplay or write to Receiver
     * 
     * @return mixed
     */
    public function execute()
    {
        // remove script name from the arguments
        array_shift($_SERVER['argv']);
        
        if (method_exists($this, 'display')) {
            return $this->display();
        } else {
            $this->write(get_class($this));
        }
    }
}
