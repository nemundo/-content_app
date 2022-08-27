<?php

namespace Nemundo\Content\App\Event\Content\EventWidget;

use Nemundo\Content\Type\AbstractContentType;

class EventWidgetType extends AbstractContentType
{
    protected function loadContentType()
    {
        $this->typeLabel = 'Event (Widget)';
        $this->typeId = 'bd3a19bb-6af3-42dc-b7ef-27524e4c9769';
        $this->formClassList[] = EventWidgetForm::class;
        $this->viewClassList[] = EventWidgetView::class;
        $this->itemClass = EventWidgetItem::class;
    }
}