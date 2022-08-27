<?php

namespace Nemundo\Content\App\Event\Content\EventWidget;

use Nemundo\Content\App\Event\Data\EventWidget\EventWidget;
use Nemundo\Content\Type\AbstractContentBuilder;

class EventWidgetBuilder extends AbstractContentBuilder
{
    protected function loadBuilder()
    {
        $this->contentType = new EventWidgetType();
    }

    protected function onCreate()
    {

        $data=new EventWidget();
        $this->dataId=$data->save();

    }

    protected function onUpdate()
    {
    }
}