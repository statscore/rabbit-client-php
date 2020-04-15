<?php

namespace Statscore\Model;

/**
 * Class Result
 * @package Statscore\Model
 */
final class Result
{
    /**
     * @var integer
     */
    private int $id;

    /**
     * @var string
     */
    private string $shortName;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var mixed
     */
    private $value;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Result
     */
    public function setId(int $id): Result
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getShortName(): string
    {
        return $this->shortName;
    }

    /**
     * @param string $shortName
     * @return Result
     */
    public function setShortName(string $shortName): Result
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Result
     */
    public function setName(string $name): Result
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return Result
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}
