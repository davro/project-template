<?php
namespace ProjectTemplate\Command;

interface CommandInterface
{
    public function execute();
    
    public function write($output);
}
