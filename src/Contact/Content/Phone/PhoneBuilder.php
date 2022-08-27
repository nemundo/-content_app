<?php

namespace Nemundo\Content\App\Contact\Content\Phone;

use Nemundo\Content\App\Contact\Data\Phone\Phone;
use Nemundo\Content\App\Contact\Data\Phone\PhoneUpdate;
use Nemundo\Content\Type\AbstractContentBuilder;

class PhoneBuilder extends AbstractContentBuilder
{

    public $phone;

    protected function loadBuilder()
    {
        $this->contentType=new PhoneType();
        // TODO: Implement loadBuilder() method.
    }


    protected function onCreate()
    {

        $data=new Phone();
        $data->phone=$this->phone;
        $this->dataId=$data->save();

    }


    protected function onUpdate()
    {

        $update=new PhoneUpdate();
        $update->phone=$this->phone;
        $update->updateById($this->dataId);

    }

}