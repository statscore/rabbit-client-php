<?php

namespace Statscore\Service\RabbitMQ;

use PhpAmqpLib\Connection\AMQPStreamConnection;

/**
 * Class AMQPService
 * @package Service
 */
class AMQPService
{
    /**
     * @var AMQPStreamConnection
     */
    private AMQPStreamConnection $connection;

    /**
     * AMQPService constructor.
     * @param string $host
     * @param int $port
     * @param string $user
     * @param string $password
     * @param string $vhost
     */
    public function __construct(string $host, int $port, string $user, string $password, string $vhost)
    {
        $this->connection = new AMQPStreamConnection($host, $port, $user, $password, $vhost);
    }

    /**
     * @return AMQPStreamConnection
     */
    public function getConnection(): AMQPStreamConnection
    {
        return $this->connection;
    }
}