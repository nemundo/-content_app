<?php

namespace Nemundo\Content\App\Calendar\Com\ListBox;

use Nemundo\Admin\Com\ListBox\AdminListBox;
use Nemundo\Content\App\Calendar\Data\CalendarSourceType\CalendarSourceTypeReader;

class CalendarSourceListBox extends AdminListBox
{
    public function getContent()
    {
        $this->label = 'CalendarSource';

        $reader = new CalendarSourceTypeReader();
        $reader->model->loadContentType();
        $reader->addOrder($reader->model->contentType->contentType);
        foreach ($reader->getData() as $calendarSourceTypeRow) {
            $this->addItem($calendarSourceTypeRow->id,$calendarSourceTypeRow->contentType->contentType);
        }


        return parent::getContent();
    }
}