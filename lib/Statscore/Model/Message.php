<?php

namespace Statscore\Model;

/**
 * Class Message
 * @package Statscore\Model
 */
final class Message
{
    /**
     * @var integer
     */
    private int $id;

    /**
     * @var string
     */
    private string $type;

    /**
     * @var string
     */
    private string $ut;

    /**
     * @var integer
     */
    private int $source;

    /**
     * @var Data
     */
    private Data $data;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Message
     */
    public function setId(int $id): Message
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Message
     */
    public function setType(string $type): Message
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getUt(): string
    {
        return $this->ut;
    }

    /**
     * @param string $ut
     * @return Message
     */
    public function setUt(string $ut): Message
    {
        $this->ut = $ut;

        return $this;
    }

    /**
     * @return int
     */
    public function getSource(): int
    {
        return $this->source;
    }

    /**
     * @param int $source
     * @return Message
     */
    public function setSource(int $source): Message
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return Data
     */
    public function getData(): Data
    {
        return $this->data;
    }

    /**
     * @param Data $data
     * @return Message
     */
    public function setData(Data $data): Message
    {
        $this->data = $data;

        return $this;
    }
}
