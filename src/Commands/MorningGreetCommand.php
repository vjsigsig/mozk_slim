<?php
namespace Mozk\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;
use Slim\Container;

class MorningGreetCommand extends Command
{
    protected static $defaultName = 'greet:morning';

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
        $this->setDescription('朝の挨拶をランダムで標準出力する');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // 
    }
}
