<?php
/**
 * Copyright (C) 2015 David Young
 *
 * Defines the flush view cache command
 */
namespace Opulence\Framework\Console\Commands;
use Opulence\Applications\Environments\Environment;
use Opulence\Console\Commands\Command;
use Opulence\Console\Responses\IResponse;

class AppEnvironmentCommand extends Command
{
    /** @var Environment The current environment */
    private $environment = null;

    /**
     * @param Environment $environment The current environment
     */
    public function __construct(Environment $environment)
    {
        parent::__construct();

        $this->environment = $environment;
    }

    /**
     * @inheritdoc
     */
    protected function define()
    {
        $this->setName("app:env")
            ->setDescription("Displays the current application environment");
    }

    /**
     * @inheritdoc
     */
    protected function doExecute(IResponse $response)
    {
        $response->writeln("<info>{$this->environment->getName()}</info>");
    }
}