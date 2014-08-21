<?php  namespace Paaxonia\Commander;

use Paaxonia\Commander\Exceptions\HandlerClassNotFoundException;

class CommandInflector {

    /**
     * Tries to resolve the handler class name for the passed in command class.
     *
     * @param CommandInterface $command
     * @return mixed
     * @throws Exceptions\HandlerClassNotFoundException
     */
    public function getHandler($command)
    {
        $handler = str_replace('Command', 'Handler', get_class($command));

        if ( ! class_exists($handler) )
        {
            throw new HandlerClassNotFoundException("Command handler [$handler] could not be found.");
        }

        return $handler;
    }
}