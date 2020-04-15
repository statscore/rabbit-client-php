<?php

namespace Statscore\Model;

/**
 * Class Participant
 * @package Statscore\Model
 */
final class Participant
{
    /**
     * @var integer
     */
    private int $counter;

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
    private string $name;

    /**
     * @var string
     */
    private string $shortName;

    /**
     * @var string
     */
    private string $acronym;

    /**
     * @var integer|null
     */
    private ?int $areaId;

    /**
     * @var string|null
     */
    private ?string $areaName;

    /**
     * @var string|null
     */
    private ?string $areaCode;

    /**
     * @var string
     */
    private string $ut;

    /**
     * @var Stat[]
     */
    private array $stats = [];

    /**
     * @var Result[]
     */
    private array $results = [];

    /**
     * @return int
     */
    public function getCounter(): int
    {
        return $this->counter;
    }

    /**
     * @param int $counter
     * @return Participant
     */
    public function setCounter(int $counter): Participant
    {
        $this->counter = $counter;

        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Participant
     */
    public function setId(int $id): Participant
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
     * @return Participant
     */
    public function setType(string $type): Participant
    {
        $this->type = $type;

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
     * @return Participant
     */
    public function setName(string $name): Participant
    {
        $this->name = $name;

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
     * @return Participant
     */
    public function setShortName(string $shortName): Participant
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * @return string
     */
    public function getAcronym(): string
    {
        return $this->acronym;
    }

    /**
     * @param string $acronym
     * @return Participant
     */
    public function setAcronym(string $acronym): Participant
    {
        $this->acronym = $acronym;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getAreaId(): ?int
    {
        return $this->areaId;
    }

    /**
     * @param int|null $areaId
     * @return Participant
     */
    public function setAreaId(?int $areaId): Participant
    {
        $this->areaId = $areaId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAreaName(): ?string
    {
        return $this->areaName;
    }

    /**
     * @param string|null $areaName
     * @return Participant
     */
    public function setAreaName(?string $areaName): Participant
    {
        $this->areaName = $areaName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAreaCode(): ?string
    {
        return $this->areaCode;
    }

    /**
     * @param string|null $areaCode
     * @return Participant
     */
    public function setAreaCode(?string $areaCode): Participant
    {
        $this->areaCode = $areaCode;

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
     * @return Participant
     */
    public function setUt(string $ut): Participant
    {
        $this->ut = $ut;

        return $this;
    }

    /**
     * @return Stat[]
     */
    public function getStats(): array
    {
        return $this->stats;
    }

    /**
     * @param Stat[] $stats
     * @return Participant
     */
    public function setStats(array $stats): Participant
    {
        $this->stats = $stats;

        return $this;
    }

    /**
     * @return Result[]
     */
    public function getResults(): array
    {
        return $this->results;
    }

    /**
     * @param Result[] $results
     * @return Participant
     */
    public function setResults(array $results): Participant
    {
        $this->results = $results;

        return $this;
    }
}