<?php

namespace Mozk\Services;

use Psr\Log\LoggerInterface;
use Illuminate\Database\Query\Builder;

class MorningGreetService
{
    /**
     * @var Psr\Log\LoggerInterface
     */
    protected $logger;

    /**
     * @var Illuminate\Database\Query\Builder
     */
    protected $table;


    /**
     * Construct
     *
     * @param Psr\Log\LoggerInterface $logger
     * @param Illuminate\Database\Query\Builder $table
     */
    public function __construct(LoggerInterface $logger, Builder $table)
    {
        $this->logger = $logger;
        $this->table = $table;
    }


    public function __invoke()
    {
    }
}
