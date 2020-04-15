<?php

namespace Statscore\Model;

/**
 * Class Detail
 * @package Statscore\Model
 */
final class Detail
{
    /**
     * @var integer
     */
    private int $id;

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
     * @return Detail
     */
    public function setId(int $id): Detail
    {
        $this->id = $id;

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
     * @return Detail
     */
    public function setName(string $name): Detail
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
     * @return Detail
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}
