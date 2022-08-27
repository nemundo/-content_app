<?php

namespace Nemundo\Content\App\Text\Content\LargeText\Builder;

use Nemundo\Content\App\Text\Data\LargeText\LargeText;
use Nemundo\Content\App\Text\Data\LargeText\LargeTextUpdate;
use Nemundo\Content\Type\AbstractContentBuilder;
use Nemundo\Core\Http\Request\HttpRequest;


abstract class AbstractLargeTextBuilder extends AbstractContentBuilder
{

    public $largeText;


  /*  protected function loadBuilder()
    {
        $this->contentType = new LargeTextType();
    }*/


    protected function onCreate()
    {

        $data = new LargeText();
        $data->largeText = $this->largeText;
        $this->dataId = $data->save();

    }


    protected function onUpdate()
    {

        $update = new LargeTextUpdate();
        $update->largeText = $this->largeText;
        $update->updateById($this->dataId);

    }


    public function saveContentFromRequest()
    {

        $this->largeText = (new HttpRequest('text'))->getValue();
        return $this->buildContent();

    }


}