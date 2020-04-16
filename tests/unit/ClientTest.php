<?php

namespace UnitTests;

use JsonException;
use PhpAmqpLib\Message\AMQPMessage;
use Statscore\Client;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use TypeError;

/**
 * Class ClientTest
 * @package UnitTests
 */
class ClientTest extends TestCase
{
    /**
     * @var Client
     */
    private Client $client;

    public function setUp(): void
    {
        parent::setUp();
        $this->client = new Client('localhost', 5672, 'guest', 'guest', 'test');
    }

    public function testRun(): void
    {
        $run = $this->client->run();
        $this->assertNull($run);
    }

    /**
     * @throws ExceptionInterface
     * @throws JsonException
     */
    public function testExampleWrongCallback(): void
    {
        $this->expectException(TypeError::class);
        $this->client->exampleCallback('message');
    }

    /**
     * @throws JsonException
     * @throws ExceptionInterface
     */
    public function testExampleEmptyCallback(): void
    {
        $this->expectException(JsonException::class);
        $this->client->exampleCallback(new AMQPMessage());
    }

    /**
     * @throws ExceptionInterface
     * @throws JsonException
     */
    public function testExampleMessage(): void
    {
        $json = file_get_contents(__DIR__ . '/assets/message.json');

        $data = $this->client->exampleCallback(new AMQPMessage($json));
        $this->assertNull($data);
    }
}
