<?php

namespace Statscore;

use JsonException;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;
use Statscore\Model\Message;
use Statscore\Service\RabbitMQ\AMQPService;
use Statscore\Service\Serializer\Serializer;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

/**
 * Class Client
 * @package Statscore
 */
final class Client
{
    /**
     * @var \Symfony\Component\Serializer\Serializer
     */
    private \Symfony\Component\Serializer\Serializer $serializer;

    /**
     * @var AMQPStreamConnection
     */
    private AMQPStreamConnection $connection;

    /**
     * @var string
     */
    private string $vhost;

    /**
     * @var callable|null
     */
    private $callback;

    /**
     * Client constructor.
     * @param string $host
     * @param int $port
     * @param string $user
     * @param string $password
     * @param string $vhost
     * @param callable $callback
     */
    public function __construct(string $host, int $port, string $user, string $password, string $vhost, ?callable $callback = null)
    {
        $service = new AMQPService($host, $port, $user, $password, $vhost);
        $this->vhost = $vhost;
        $this->callback = $callback;
        $this->serializer = Serializer::get();
        $this->connection = $service->getConnection();
    }

    public function run(): void
    {
        $channel = $this->connection->channel();

        $channel->basic_consume($this->vhost, '', false, true, false, false, $this->callback ?? [$this, 'exampleCallback']);

        while (count($channel->callbacks)) {
            $channel->wait();
        }

        $channel->close();
        $this->connection->close();
    }

    /**
     * @param AMQPMessage $msg
     * @throws JsonException
     * @throws ExceptionInterface
     */
    public function exampleCallback(AMQPMessage $msg): void
    {
        $message = json_decode($msg->body, true, 512, JSON_THROW_ON_ERROR) ?? [];
        $messageModel = $this->serializer->denormalize(
            $message,
            Message::class,
            null,
            [ObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true]
        );
        dump($messageModel);
    }
}