<?php

namespace Nemundo\Content\App\Bookmark\Content\Url;

use Nemundo\Content\App\Bookmark\Data\Url\Url;
use Nemundo\Content\Type\AbstractContentBuilder;

class UrlBuilder extends AbstractContentBuilder
{

    public $url;

    protected function loadBuilder()
    {
        $this->contentType = new UrlType();
    }

    protected function onCreate()
    {

        $data = new Url();
        $data->url = $this->url;
        $this->dataId = $data->save();

    }

    protected function onUpdate()
    {
    }
}