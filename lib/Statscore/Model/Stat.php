<?php

namespace Statscore\Model;

/**
 * Class Stat
 * @package Statscore\Model
 */
final class Stat
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
     * @return Stat
     */
    public function setId(int $id): Stat
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
     * @return Stat
     */
    public function setShortName(string $shortName): Stat
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
     * @return Stat
     */
    public function setName(string $name): Stat
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
     * @return Stat
     */
    public function setValue($value): Stat
    {
        $this->value = $value;

        return $this;
    }
}
