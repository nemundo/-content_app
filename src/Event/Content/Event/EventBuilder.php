<?php

namespace Nemundo\Content\App\Event\Content\Event;

use Nemundo\Content\App\Event\Data\Event\Event;
use Nemundo\Content\App\Event\Data\Event\EventUpdate;
use Nemundo\Content\Type\AbstractContentBuilder;
use Nemundo\Core\Type\DateTime\DateTime;

class EventBuilder extends AbstractContentBuilder
{

    /**
     * @var DateTime
     */
    public $dateTime;

    /**
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $description;


    protected function loadBuilder()
    {

        $this->contentType = new EventType();

    }


    protected function onCreate()
    {

        $data = new Event();
        $data->dateTime = $this->dateTime;
        $data->event = $this->event;
        $data->description = $this->description;
        $this->dataId = $data->save();

    }


    protected function onUpdate()
    {

        $update = new EventUpdate();
        $update->dateTime = $this->dateTime;
        $update->event = $this->event;
        $update->description = $this->description;
        $update->updateById($this->dataId);

    }

}