<?php

namespace Nemundo\Content\App\Event\Content\Event;

use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Admin\Com\Table\AdminTableHeader;
use Nemundo\Admin\Com\Table\Row\AdminTableRow;
use Nemundo\Content\App\Event\Data\Event\EventReader;
use Nemundo\Content\Parameter\DataIdParameter;
use Nemundo\Content\View\AbstractContentListing;

class EventListing extends AbstractContentListing
{

    public function getContent()
    {

        $table = new AdminTable($this);

        $header = new AdminTableHeader($table);
        $header->addText('Date/Time');
        $header->addText('Event');
        $header->addEmpty();
        $header->addEmpty();

        $reader = new EventReader();
        foreach ($reader->getData() as $eventRow) {

            $row = new AdminTableRow($table);
            $row->addText($eventRow->event);
            $row->addText($eventRow->dateTime->getIsoDate());

        }

        return parent::getContent();
    }

}