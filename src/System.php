<?php
namespace ProjectTemplate;

class System
{
    /**
     * Helper for checking command line environment
     * 
     * @return boolean
     * @throws \Exception
     */
    public function isCli()
    {
        if (php_sapi_name() === 'cli') {
            return true;
        }
        throw new \Exception('Please run code in a command line environment');
    }
}
