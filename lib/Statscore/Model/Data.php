<?php

namespace Statscore\Model;

/**
 * Class Data
 * @package Statscore\Model
 */
final class Data
{
    /**
     * @var Incident
     */
    private Incident $incident;

    /**
     * @var Event
     */
    private Event $event;

    /**
     * @return Incident
     */
    public function getIncident(): Incident
    {
        return $this->incident;
    }

    /**
     * @param Incident $incident
     * @return Data
     */
    public function setIncident(Incident $incident): Data
    {
        $this->incident = $incident;

        return $this;
    }

    /**
     * @return Event
     */
    public function getEvent(): Event
    {
        return $this->event;
    }

    /**
     * @param Event $event
     * @return Data
     */
    public function setEvent(Event $event): Data
    {
        $this->event = $event;

        return $this;
    }
}