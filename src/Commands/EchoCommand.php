<?php
namespace Mozk\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;
use Slim\Container;

class EchoCommand extends Command
{
    protected static $defaultName = 'test:echo';

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
        $this->setDescription('指定文字列を標準出力する');
        $this->addArgument('char', InputArgument::REQUIRED, '指定文字列');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln($input->getArgument('char'));
    }
}
