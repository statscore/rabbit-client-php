<?php

namespace UnitTests;

use PHPUnit\Framework\TestCase as BaseTest;
use Statscore\Client;
use Symfony\Component\Serializer\Serializer;

abstract class TestCase extends BaseTest
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var Serializer
     */
    protected $serializer;

    public function setUp(): void
    {
        parent::setUp();

        $this->serializer = \Statscore\Service\Serializer\Serializer::get();
    }
}
