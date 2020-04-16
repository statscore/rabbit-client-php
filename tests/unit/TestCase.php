<?php

namespace UnitTests;

use Mockery;
use PhpAmqpLib\Channel\AMQPChannel;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PHPUnit\Framework\TestCase as BaseTest;
use Statscore\Service\RabbitMQ\AMQPService;

abstract class TestCase extends BaseTest
{
    public function setUp(): void
    {
        parent::setUp();
        $channel = Mockery::mock(AMQPChannel::class);
        $channel->shouldReceive('basic_consume')->andReturn('test');
        $channel->shouldReceive('close')->andReturn();

        $stream = Mockery::mock(AMQPStreamConnection::class);
        $stream->shouldReceive('channel')->andReturn($channel);
        $stream->shouldReceive('close')->andReturn();

        $mock = Mockery::mock('overload:' . AMQPService::class);
        $mock->shouldReceive('getConnection')->andReturn($stream);
    }
}
