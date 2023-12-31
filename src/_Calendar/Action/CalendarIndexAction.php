<?php

namespace Nemundo\Content\App\Calendar\Action;

use Nemundo\Content\Action\AbstractContentAction;
use Nemundo\Content\App\Calendar\Data\Calendar\Calendar;
use Nemundo\Content\Index\Calendar\DateTimeIndexTrait;
use Nemundo\Content\Type\AbstractContentItem;

class CalendarIndexAction extends AbstractContentAction
{

    protected function loadAction()
    {

        $this->actionId = 'ba95d9fe-a836-48aa-be96-c94d387a2cd2';
        $this->actionLabel = 'Calendar';
        $this->actionBuilder = true;

    }


    /**
     * @param AbstractContentItem|DateTimeIndexTrait $item
     * @return void
     */
    public function onAction(AbstractContentItem $item)
    {

        if ($item->isObjectOfTrait(DateTimeIndexTrait::class)) {
            $data = new Calendar();
            $data->date = $item->getDate();
            $data->time=$item->getDateTime()->getTime();
            $data->event = $item->getSubject();
            $data->contentId = $item->getContentId();
            $data->save();
        }

    }

}