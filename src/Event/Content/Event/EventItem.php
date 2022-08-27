<?php

namespace Nemundo\Content\App\Event\Content\Event;

use Nemundo\Content\App\Event\Data\Event\EventDelete;
use Nemundo\Content\App\Event\Data\Event\EventReader;
use Nemundo\Content\App\Event\Data\Event\EventRow;
use Nemundo\Content\Index\Calendar\DateTimeIndexTrait;
use Nemundo\Content\Type\AbstractContentItem;

class EventItem extends AbstractContentItem
{

    use DateTimeIndexTrait;

    protected function loadItem()
    {
        $this->contentType = new EventType();
    }


    protected function onDataRow()
    {
        $this->dataRow = (new EventReader())->getRowById($this->dataId);
    }


    /**
     * @return \Nemundo\Model\Row\AbstractModelDataRow|EventRow
     */
    public function getDataRow()
    {
        return parent::getDataRow();
    }


    public function getSubject()
    {
        return $this->getDataRow()->event;
    }


    public function getDateTime()
    {

        return $this->getDataRow()->dateTime;

    }


    protected function onDeleteItem()
    {

        (new EventDelete())->deleteById($this->dataId);

    }

}