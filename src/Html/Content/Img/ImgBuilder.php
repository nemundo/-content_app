<?php

namespace Nemundo\Content\App\Html\Content\Img;

use Nemundo\Content\App\Html\Data\ImgProperty\ImgProperty;
use Nemundo\Content\App\Html\Data\ImgProperty\ImgPropertyUpdate;
use Nemundo\Content\Type\AbstractContentBuilder;

class ImgBuilder extends AbstractContentBuilder
{

    public $src;

    protected function loadBuilder()
    {
        $this->contentType = new ImgType();
    }

    protected function onCreate()
    {

        $data = new ImgProperty();
        $data->src = $this->src;
        $this->dataId = $data->save();

    }

    protected function onUpdate()
    {

        $update = new ImgPropertyUpdate();
        $update->src = $this->src;
        $update->updateById($this->dataId);

    }
}