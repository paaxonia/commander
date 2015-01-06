<?php namespace Paaxonia\Commander;

use Illuminate\Support\Facades\App;

trait CommandTrait {

    /**
     * Execute the command.
     *
     * @param $command
     * @return mixed
     */
    public function execute($command)
    {
        return $this->getCommandBus()->execute($command);
    }

    /**
     * Fetch the command bus.
     *
     * @return \Paaxonia\Commander\CommandBus
     */
    public function getCommandBus()
    {
        return App::make('Paaxonia\Commander\CommandBus');
    }
} 