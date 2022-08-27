<?php

namespace Nemundo\Content\App\Event\Content\Event;

use Nemundo\Admin\Com\Title\AdminSubtitle;
use Nemundo\Content\View\AbstractContentView;
use Nemundo\Core\Type\Text\Html;
use Nemundo\Html\Paragraph\Paragraph;

class EventView extends AbstractContentView
{

    protected function loadView()
    {
        $this->viewName = 'default';
        $this->viewId = '5dc14930-f943-4fad-919f-623ae117d301';
        $this->defaultView = true;
    }

    public function getContent()
    {

        $eventRow = (new EventItem($this->dataId))->getDataRow();

        $subtitle = new AdminSubtitle($this);
        $subtitle->content = $eventRow->dateTime->getShortDateTimeFormat() . ' ' . $eventRow->event;

        $p = new Paragraph($this);
        $p->content = (new Html($eventRow->description))->getValue();


        return parent::getContent();

    }
}