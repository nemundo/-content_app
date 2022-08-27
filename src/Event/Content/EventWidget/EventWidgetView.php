<?php

namespace Nemundo\Content\App\Event\Content\EventWidget;

use Nemundo\Admin\Com\Item\AdminItemText;
use Nemundo\Admin\Com\Item\AdminItemTitle;
use Nemundo\Admin\Com\Title\AdminSubtitle;
use Nemundo\Content\App\Event\Reader\EventDataReader;
use Nemundo\Content\View\AbstractContentView;

class EventWidgetView extends AbstractContentView
{
    protected function loadView()
    {
        $this->viewName = 'default';
        $this->viewId = 'c3c26e97-fedd-4d0b-bf25-028174bd9d27';
        $this->defaultView = true;
    }

    public function getContent()
    {


        $reader = new EventDataReader();

        foreach ($reader->getData() as $eventRow) {

            $subtitle=new AdminSubtitle($this);
            $subtitle->content=$eventRow->dateTime->getShortDateTimeFormat();

            $title =new AdminItemTitle($this);
            $title->content=$eventRow->event;

            $text=new AdminItemText($this);
            $text->content=$eventRow->description;


        }




        return parent::getContent();
    }
}