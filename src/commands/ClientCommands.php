<?php

namespace Superdoll\commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ClientCommands extends Command
{
    protected static $defaultName = 'doll:create-client';

    public function __construct()
    {
        parent::__construct();
    }

    protected function configure()
    {
        $this->setDescription('Create a new client.');

        $this->setHelp('Allow you to create another new client.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // ...
    }
}
