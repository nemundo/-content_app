<?php

namespace Nemundo\Content\App\Event\Reader;

use Nemundo\Content\App\Event\Data\Event\EventReader;
use Nemundo\Core\Type\DateTime\DateTime;

class EventDataReader extends EventReader
{

    public function getData()
    {

        $this->addOrder($this->model->dateTime);
        $this->filter->andEqualOrGreater($this->model->dateTime, (new DateTime())->setNow()->getIsoDateTime());

        //$this->limit=10;

        return parent::getData();

    }

}