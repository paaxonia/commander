<?php namespace Paaxonia\Commander;

use Illuminate\Container\Container;

class DefaultCommandBus implements CommandBus {

    /**
     * @var \Illuminate\Container\Container
     */
    private $container;
    /**
     * @var CommandNameInflector
     */
    private $inflector;

    /**
     * @param Container $container
     * @param CommandInflector $inflector
     */
    function __construct(Container $container, CommandInflector $inflector)
    {
        $this->container = $container;
        $this->inflector = $inflector;
    }

    /**
     * @param CommandInterface $command
     * @return mixed
     */
    public function execute($command)
    {
        return $this->getHandler($command)->handle($command);
    }

    /**
     * @param $command
     * @return mixed
     */
    function getHandler($command)
    {
        return $this->container->make($this->inflector->getHandler($command));
    }
}