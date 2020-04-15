<?php

namespace Statscore\Model;

use DateTime;

/**
 * Class Event
 * @package Statscore\Model
 */
final class Event
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var string
     */
    private string $action;

    /**
     * @var DateTime
     */
    private DateTime $startDate;

    /**
     * @var string
     */
    private string $ftOnly;

    /**
     * @var string
     */
    private string $coverageType;

    /**
     * @var int
     */
    private int $statusId;

    /**
     * @var int
     */
    private int $sportId;

    /**
     * @var string|null
     */
    private ?string $day;

    /**
     * @var string
     */
    private string $neutralVenue;

    /**
     * @var string
     */
    private string $itemStatus;

    /**
     * @var string|null
     */
    private ?string $clockTime;

    /**
     * @var int|null
     */
    private ?int $clockStatus;

    /**
     * @var int|null
     */
    private ?int $areaId;

    /**
     * @var int|null
     */
    private ?int $competitionId;

    /**
     * @var int|null
     */
    private ?int $seasonId;

    /**
     * @var int|null
     */
    private ?int $stageId;

    /**
     * @var int|null
     */
    private ?int $tourId;

    /**
     * @var string|null
     */
    private ?string $gender;

    /**
     * @var string
     */
    private string $betStatus;

    /**
     * @var string
     */
    private string $relationStatus;

    /**
     * @var string
     */
    private string $statusType;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var int|null
     */
    private ?int $roundId;

    /**
     * @var string|null
     */
    private ?string $roundName;

    /**
     * @var string
     */
    private string $scoutsfeed;

    /**
     * @var string
     */
    private string $eventStatsLvl;

    /**
     * @var Detail[]
     */
    private array $details;

    /**
     * @var Participant[]
     */
    private array $participants;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Event
     */
    public function setId(int $id): Event
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @param string $action
     * @return Event
     */
    public function setAction(string $action): Event
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getStartDate(): DateTime
    {
        return $this->startDate;
    }

    /**
     * @param DateTime $startDate
     * @return Event
     */
    public function setStartDate(DateTime $startDate): Event
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getFtOnly(): string
    {
        return $this->ftOnly;
    }

    /**
     * @param string $ftOnly
     * @return Event
     */
    public function setFtOnly(string $ftOnly): Event
    {
        $this->ftOnly = $ftOnly;

        return $this;
    }

    /**
     * @return string
     */
    public function getCoverageType(): string
    {
        return $this->coverageType;
    }

    /**
     * @param string $coverageType
     * @return Event
     */
    public function setCoverageType(string $coverageType): Event
    {
        $this->coverageType = $coverageType;

        return $this;
    }

    /**
     * @return int
     */
    public function getStatusId(): int
    {
        return $this->statusId;
    }

    /**
     * @param int $statusId
     * @return Event
     */
    public function setStatusId(int $statusId): Event
    {
        $this->statusId = $statusId;

        return $this;
    }

    /**
     * @return int
     */
    public function getSportId(): int
    {
        return $this->sportId;
    }

    /**
     * @param int $sportId
     * @return Event
     */
    public function setSportId(int $sportId): Event
    {
        $this->sportId = $sportId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDay(): ?string
    {
        return $this->day;
    }

    /**
     * @param string|null $day
     * @return Event
     */
    public function setDay(?string $day): Event
    {
        $this->day = $day;

        return $this;
    }

    /**
     * @return string
     */
    public function getNeutralVenue(): string
    {
        return $this->neutralVenue;
    }

    /**
     * @param string $neutralVenue
     * @return Event
     */
    public function setNeutralVenue(string $neutralVenue): Event
    {
        $this->neutralVenue = $neutralVenue;

        return $this;
    }

    /**
     * @return string
     */
    public function getItemStatus(): string
    {
        return $this->itemStatus;
    }

    /**
     * @param string $itemStatus
     * @return Event
     */
    public function setItemStatus(string $itemStatus): Event
    {
        $this->itemStatus = $itemStatus;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getClockTime(): ?string
    {
        return $this->clockTime;
    }

    /**
     * @param string|null $clockTime
     * @return Event
     */
    public function setClockTime(?string $clockTime): Event
    {
        $this->clockTime = $clockTime;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getClockStatus(): ?int
    {
        return $this->clockStatus;
    }

    /**
     * @param int|null $clockStatus
     * @return Event
     */
    public function setClockStatus(?int $clockStatus): Event
    {
        $this->clockStatus = $clockStatus;

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
     * @return Event
     */
    public function setAreaId(?int $areaId): Event
    {
        $this->areaId = $areaId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCompetitionId(): ?int
    {
        return $this->competitionId;
    }

    /**
     * @param int|null $competitionId
     * @return Event
     */
    public function setCompetitionId(?int $competitionId): Event
    {
        $this->competitionId = $competitionId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getSeasonId(): ?int
    {
        return $this->seasonId;
    }

    /**
     * @param int|null $seasonId
     * @return Event
     */
    public function setSeasonId(?int $seasonId): Event
    {
        $this->seasonId = $seasonId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getStageId(): ?int
    {
        return $this->stageId;
    }

    /**
     * @param int|null $stageId
     * @return Event
     */
    public function setStageId(?int $stageId): Event
    {
        $this->stageId = $stageId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getTourId(): ?int
    {
        return $this->tourId;
    }

    /**
     * @param int|null $tourId
     * @return Event
     */
    public function setTourId(?int $tourId): Event
    {
        $this->tourId = $tourId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param string|null $gender
     * @return Event
     */
    public function setGender(?string $gender): Event
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * @return string
     */
    public function getBetStatus(): string
    {
        return $this->betStatus;
    }

    /**
     * @param string $betStatus
     * @return Event
     */
    public function setBetStatus(string $betStatus): Event
    {
        $this->betStatus = $betStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getRelationStatus(): string
    {
        return $this->relationStatus;
    }

    /**
     * @param string $relationStatus
     * @return Event
     */
    public function setRelationStatus(string $relationStatus): Event
    {
        $this->relationStatus = $relationStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusType(): string
    {
        return $this->statusType;
    }

    /**
     * @param string $statusType
     * @return Event
     */
    public function setStatusType(string $statusType): Event
    {
        $this->statusType = $statusType;

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
     * @return Event
     */
    public function setName(string $name): Event
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getRoundId(): ?int
    {
        return $this->roundId;
    }

    /**
     * @param int|null $roundId
     * @return Event
     */
    public function setRoundId(?int $roundId): Event
    {
        $this->roundId = $roundId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRoundName(): ?string
    {
        return $this->roundName;
    }

    /**
     * @param string|null $roundName
     * @return Event
     */
    public function setRoundName(?string $roundName): Event
    {
        $this->roundName = $roundName;

        return $this;
    }

    /**
     * @return string
     */
    public function getScoutsfeed(): string
    {
        return $this->scoutsfeed;
    }

    /**
     * @param string $scoutsfeed
     * @return Event
     */
    public function setScoutsfeed(string $scoutsfeed): Event
    {
        $this->scoutsfeed = $scoutsfeed;

        return $this;
    }

    /**
     * @return string
     */
    public function getEventStatsLvl(): string
    {
        return $this->eventStatsLvl;
    }

    /**
     * @param string $eventStatsLvl
     * @return Event
     */
    public function setEventStatsLvl(string $eventStatsLvl): Event
    {
        $this->eventStatsLvl = $eventStatsLvl;

        return $this;
    }

    /**
     * @return Detail[]
     */
    public function getDetails(): array
    {
        return $this->details;
    }

    /**
     * @param Detail[] $details
     * @return Event
     */
    public function setDetails(array $details): Event
    {
        $this->details = $details;

        return $this;
    }

    /**
     * @return Participant[]
     */
    public function getParticipants(): array
    {
        return $this->participants;
    }

    /**
     * @param Participant[] $participants
     * @return Event
     */
    public function setParticipants(array $participants): Event
    {
        $this->participants = $participants;

        return $this;
    }
}