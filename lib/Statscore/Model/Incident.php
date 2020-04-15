<?php

namespace Statscore\Model;

/**
 * Class Incident
 * @package Statscore\Model\Response\Feed
 */
final class Incident
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
     * @var integer
     */
    private int $incidentId;

    /**
     * @var string
     */
    private string $incidentName;

    /**
     * @var integer|null
     */
    private ?int $participantId;

    /**
     * @var string|null
     */
    private ?string $participantName;

    /**
     * @var integer|null
     */
    private ?int $subparticipantId;

    /**
     * @var string|null
     */
    private ?string $subparticipantName;

    /**
     * @var string|null
     */
    private ?string $info;

    /**
     * @var string
     */
    private string $important;

    /**
     * @var string
     */
    private string $importantForTrader;

    /**
     * @var string|null
     */
    private ?string $addData;

    /**
     * @var string
     */
    private string $showPopup;

    /**
     * @var string
     */
    private string $showScores;

    /**
     * @var string
     */
    private string $showAction;

    /**
     * @var string
     */
    private string $showTime;

    /**
     * @var string
     */
    private string $showOnTimeline;

    /**
     * @var string|null
     */
    private ?string $eventTime;

    /**
     * @var integer
     */
    private int $eventStatusId;

    /**
     * @var string
     */
    private string $eventStatusName;

    /**
     * @var string|null
     */
    private ?string $xPos;

    /**
     * @var string|null
     */
    private ?string $yPos;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Incident
     */
    public function setId(int $id): Incident
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
     * @return Incident
     */
    public function setAction(string $action): Incident
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return int
     */
    public function getIncidentId(): int
    {
        return $this->incidentId;
    }

    /**
     * @param int $incidentId
     * @return Incident
     */
    public function setIncidentId(int $incidentId): Incident
    {
        $this->incidentId = $incidentId;

        return $this;
    }

    /**
     * @return string
     */
    public function getIncidentName(): string
    {
        return $this->incidentName;
    }

    /**
     * @param string $incidentName
     * @return Incident
     */
    public function setIncidentName(string $incidentName): Incident
    {
        $this->incidentName = $incidentName;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getParticipantId(): ?int
    {
        return $this->participantId;
    }

    /**
     * @param int|null $participantId
     * @return Incident
     */
    public function setParticipantId(?int $participantId): Incident
    {
        $this->participantId = $participantId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getParticipantName(): ?string
    {
        return $this->participantName;
    }

    /**
     * @param string|null $participantName
     * @return Incident
     */
    public function setParticipantName(?string $participantName): Incident
    {
        $this->participantName = $participantName;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getSubparticipantId(): ?int
    {
        return $this->subparticipantId;
    }

    /**
     * @param int|null $subparticipantId
     * @return Incident
     */
    public function setSubparticipantId(?int $subparticipantId): Incident
    {
        $this->subparticipantId = $subparticipantId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSubparticipantName(): ?string
    {
        return $this->subparticipantName;
    }

    /**
     * @param string|null $subparticipantName
     * @return Incident
     */
    public function setSubparticipantName(?string $subparticipantName): Incident
    {
        $this->subparticipantName = $subparticipantName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInfo(): ?string
    {
        return $this->info;
    }

    /**
     * @param string|null $info
     * @return Incident
     */
    public function setInfo(?string $info): Incident
    {
        $this->info = $info;

        return $this;
    }

    /**
     * @return string
     */
    public function getImportant(): string
    {
        return $this->important;
    }

    /**
     * @param string $important
     * @return Incident
     */
    public function setImportant(string $important): Incident
    {
        $this->important = $important;

        return $this;
    }

    /**
     * @return string
     */
    public function getImportantForTrader(): string
    {
        return $this->importantForTrader;
    }

    /**
     * @param string $importantForTrader
     * @return Incident
     */
    public function setImportantForTrader(string $importantForTrader): Incident
    {
        $this->importantForTrader = $importantForTrader;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddData(): ?string
    {
        return $this->addData;
    }

    /**
     * @param string|null $addData
     * @return Incident
     */
    public function setAddData(?string $addData): Incident
    {
        $this->addData = $addData;

        return $this;
    }

    /**
     * @return string
     */
    public function getShowPopup(): string
    {
        return $this->showPopup;
    }

    /**
     * @param string $showPopup
     * @return Incident
     */
    public function setShowPopup(string $showPopup): Incident
    {
        $this->showPopup = $showPopup;

        return $this;
    }

    /**
     * @return string
     */
    public function getShowScores(): string
    {
        return $this->showScores;
    }

    /**
     * @param string $showScores
     * @return Incident
     */
    public function setShowScores(string $showScores): Incident
    {
        $this->showScores = $showScores;

        return $this;
    }

    /**
     * @return string
     */
    public function getShowAction(): string
    {
        return $this->showAction;
    }

    /**
     * @param string $showAction
     * @return Incident
     */
    public function setShowAction(string $showAction): Incident
    {
        $this->showAction = $showAction;

        return $this;
    }

    /**
     * @return string
     */
    public function getShowTime(): string
    {
        return $this->showTime;
    }

    /**
     * @param string $showTime
     * @return Incident
     */
    public function setShowTime(string $showTime): Incident
    {
        $this->showTime = $showTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getShowOnTimeline(): string
    {
        return $this->showOnTimeline;
    }

    /**
     * @param string $showOnTimeline
     * @return Incident
     */
    public function setShowOnTimeline(string $showOnTimeline): Incident
    {
        $this->showOnTimeline = $showOnTimeline;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEventTime(): ?string
    {
        return $this->eventTime;
    }

    /**
     * @param string|null $eventTime
     * @return Incident
     */
    public function setEventTime(?string $eventTime): Incident
    {
        $this->eventTime = $eventTime;

        return $this;
    }

    /**
     * @return int
     */
    public function getEventStatusId(): int
    {
        return $this->eventStatusId;
    }

    /**
     * @param int $eventStatusId
     * @return Incident
     */
    public function setEventStatusId(int $eventStatusId): Incident
    {
        $this->eventStatusId = $eventStatusId;

        return $this;
    }

    /**
     * @return string
     */
    public function getEventStatusName(): string
    {
        return $this->eventStatusName;
    }

    /**
     * @param string $eventStatusName
     * @return Incident
     */
    public function setEventStatusName(string $eventStatusName): Incident
    {
        $this->eventStatusName = $eventStatusName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getXPos(): ?string
    {
        return $this->xPos;
    }

    /**
     * @param string|null $xPos
     * @return Incident
     */
    public function setXPos(?string $xPos): Incident
    {
        $this->xPos = $xPos;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getYPos(): ?string
    {
        return $this->yPos;
    }

    /**
     * @param string|null $yPos
     * @return Incident
     */
    public function setYPos(?string $yPos): Incident
    {
        $this->yPos = $yPos;

        return $this;
    }
}
