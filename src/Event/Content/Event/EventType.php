<?php

namespace Nemundo\Content\App\Event\Content\Event;

use Nemundo\Content\Type\AbstractContentType;

class EventType extends AbstractContentType
{

    protected function loadContentType()
    {
        $this->typeLabel = 'Event';
        $this->typeId = 'fb49c8fb-f902-4c70-a8a2-af138af540b0';
        $this->itemClass = EventItem::class;
        $this->removeClass = EventRemove::class;
        $this->formClassList[] = EventForm::class;
        $this->viewClassList[] = EventView::class;
        $this->adminClass = EventAdmin::class;
        $this->listingClass = EventListing::class;

    }

}