<?php

namespace Nemundo\Content\App\Text\Content\Html;

use Nemundo\Content\App\Text\Content\LargeText\Builder\AbstractLargeTextBuilder;
use Nemundo\Content\App\Text\Data\LargeText\LargeText;
use Nemundo\Content\Type\AbstractContentBuilder;

class HtmlBuilder extends AbstractLargeTextBuilder  // AbstractContentBuilder
{

    //public $largeText;


    protected function loadBuilder()
    {
        $this->contentType = new HtmlType();
    }


    /*protected function onCreate()
    {

        $data = new LargeText();
        $data->largeText = $this->largeText;
        $this->dataId = $data->save();

    }*/

}