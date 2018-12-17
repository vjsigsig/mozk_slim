<?php
namespace Mozk\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;
use Slim\Container;

class TestCommand extends Command
{
    protected static $defaultName = 'test:test';

    /**
     * @var Slim\Container
     */
    protected $container = null;

    /**
     * Construct
     *
     * @param Slim\Container $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;

        parent::__construct();
    }


    protected function configure()
    {
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $seed = new \Mozk\Seeder\TblGreetMorningSeeder();
        $seed->setContainer($this->container);
        $seed->run();
    }
}
