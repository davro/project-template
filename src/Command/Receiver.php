<?php
namespace ProjectTemplate\Command;

class Receiver
{
    /**
     * Output buffer property
     * 
     * @var array 
     */
    private $output = [];
    
    /**
     * Write a line to the output
     * 
     * @param mixed $item
     */
    public function write($item)
    {
        $this->output[] = $item;
    }
    
    /**
     * Getter for retrieving all items written
     * 
     * @return string
     */
    public function getAll()
    {
        return join("\n", $this->output);
    }

}