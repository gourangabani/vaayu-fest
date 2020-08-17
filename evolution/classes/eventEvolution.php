<?php

class EventEvolution
{
    public $eventId;
    public $eventSlug;
    public $eventName;
    public $eventBrochureTitle;
    public $eventDescription;
    public $eventPoster;
    public $eventType;
    public $eventDepartment;

    public function __construct($eventId, $eventSlug, $eventName, $eventBrochureTitle, $eventDescription, $eventPoster, $eventType, $eventDepartment)
    {
        $this->eventId = $eventId;
        $this->eventSlug = $eventSlug;
        $this->eventName = $eventName;
        $this->eventBrochureTitle = $eventBrochureTitle;
        $this->eventDescription = $eventDescription;
        $this->eventPoster = $eventPoster;
        $this->eventType = $eventType;
        $this->eventDepartment = $eventDepartment;
    }
}

abstract class eventType
{
    const individual = 'individual';
    const team = 'team';
}
