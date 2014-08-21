<?php namespace Paaxonia\Commander;

interface CommandBus {

    /**
     * Execute the given command.
     *
     * @param $command
     * @return mixed
     */
    public function execute($command);
} 