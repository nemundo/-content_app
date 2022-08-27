<?php

namespace Nemundo\Content\App\WebRadio\Content\WebRadio;

use Nemundo\Content\App\WebRadio\Data\WebRadio\WebRadio;
use Nemundo\Content\App\WebRadio\Data\WebRadio\WebRadioId;
use Nemundo\Content\Type\AbstractContentBuilder;

class WebRadioBuilder extends AbstractContentBuilder
{

    public $webRadio;

    public $streamUrl;


    protected function loadBuilder()
    {
        $this->contentType=new WebRadioType();
        // TODO: Implement loadBuilder() method.
    }


    protected function onCreate()
    {


        $data = new WebRadio();
        $data->updateOnDuplicate=true;
        $data->webRadio = $this->webRadio;
        $data->streamUrl = $this->streamUrl;
        $this->dataId= $data->save();

        $id =new WebRadioId();
        $id->filter->andEqual($id->model->streamUrl,$this->streamUrl);
        $this->dataId=$id->getId();

        //$this->saveIndex((new WebRadioType($dataId)));*/

    }

}