<?php

namespace Nemundo\Content\App\Html\Content\Iframe;

use Nemundo\Content\View\AbstractContentView;
use Nemundo\Html\Iframe\Iframe;

class IframeView extends AbstractContentView
{
    protected function loadView()
    {
        $this->viewName = 'default';
        $this->viewId = 'b03b10c7-09e3-4c37-9216-1eed637c654a';
        $this->defaultView = true;
    }

    public function getContent()
    {

        $dataRow = (new IframeItem($this->dataId))->getDataRow();

        $iframe = new Iframe($this);
        $iframe->src = $dataRow->src;


        return parent::getContent();
    }
}