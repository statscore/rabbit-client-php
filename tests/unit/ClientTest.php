<?php

namespace UnitTests;

use JsonException;
use PhpAmqpLib\Message\AMQPMessage;
use Statscore\Client;
use TypeError;

/**
 * Class ClientTest
 * @package UnitTests
 */
class ClientTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->client = new Client('localhost', 5672, 'guest', 'guest', 'test');
    }

    public function testExampleWrongCallback(): void
    {
        $this->expectException(TypeError::class);
        $this->client->exampleCallback('message');
    }

    public function testExampleEmptyCallback(): void
    {
        $this->expectException(JsonException::class);
        $this->client->exampleCallback(new AMQPMessage());
    }

    public function testExampleMessage(): void
    {
        $json = file_get_contents(__DIR__ . '/assets/message.json');

        $t = $this->client->exampleCallback(new AMQPMessage($json));
        $this->assertNull($t);
    }
}
