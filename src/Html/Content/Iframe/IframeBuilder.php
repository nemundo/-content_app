<?php

namespace Nemundo\Content\App\Html\Content\Iframe;

use Nemundo\Content\App\Html\Data\IframeWidget\IframeWidget;
use Nemundo\Content\App\Html\Data\IframeWidget\IframeWidgetUpdate;
use Nemundo\Content\Type\AbstractContentBuilder;

class IframeBuilder extends AbstractContentBuilder
{

    public $src;

    protected function loadBuilder()
    {
        $this->contentType = new IframeType();
    }

    protected function onCreate()
    {

        $data=new IframeWidget();
        $data->src=$this->src;
        $this->dataId=$data->save();

    }

    protected function onUpdate()
    {

        $update=new IframeWidgetUpdate();
        $update->src=$this->src;
        $update->updateById($this->dataId);

    }
}