<?php
require 'vendor/autoload.php';

use \ProjectTemplate\System;
use \ProjectTemplate\Command\Invoker;
use \ProjectTemplate\Command\Receiver;
use \ProjectTemplate\Command\ExampleCommand;

try {
    $system = new System();

    if ($system->isCli()) {
        $invoker  = new Invoker();
        $receiver = new Receiver();
        
        $invoker->setCommand(new ExampleCommand($receiver));
        $invoker->run();
        
        echo $receiver->getAll();
    }
    
} catch (\Exception $e) {
    echo $e->getMessage(), "\n";
}
