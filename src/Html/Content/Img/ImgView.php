<?php

namespace Nemundo\Content\App\Html\Content\Img;

use Nemundo\Admin\Com\Image\AdminImage;
use Nemundo\Content\App\Html\Content\Iframe\IframeItem;
use Nemundo\Content\View\AbstractContentView;
use Nemundo\Html\Iframe\Iframe;

class ImgView extends AbstractContentView
{
    protected function loadView()
    {
        $this->viewName = 'default';
        $this->viewId = 'd1970d45-9277-48d7-832f-c47c6c4a0eec';
        $this->defaultView = true;
    }

    public function getContent()
    {

        $dataRow = (new ImgItem($this->dataId))->getDataRow();

        $iframe = new AdminImage($this);
        $iframe->src = $dataRow->src;

        return parent::getContent();
    }
}