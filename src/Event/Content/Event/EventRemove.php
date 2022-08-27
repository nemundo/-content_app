<?php

namespace Nemundo\Content\App\Event\Content\Event;

use Nemundo\Content\App\Event\Data\Event\EventDelete;
use Nemundo\Content\Type\AbstractContentRemove;

class EventRemove extends AbstractContentRemove
{

    protected function loadRemove()
    {
        $this->contentType=new EventType();
    }


    protected function onDelete()
    {
        (new EventDelete())->deleteById($this->dataId);
    }

}