<?php

namespace Nemundo\Content\App\Bookmark\Content\Url;

use Nemundo\Com\Html\Hyperlink\UrlHyperlink;
use Nemundo\Content\View\AbstractContentView;

class UrlView extends AbstractContentView
{
    protected function loadView()
    {
        $this->viewName = 'default';
        $this->viewId = 'ac8a00fd-0ae6-4327-8f6f-d11b552e1e45';
        $this->defaultView = true;
    }

    public function getContent()
    {

        $dataRow = (new UrlItem($this->dataId))->getDataRow();

        $hyperlink = new UrlHyperlink($this);
        $hyperlink->content = $dataRow->url;
        $hyperlink->url = $dataRow->url;
        $hyperlink->openNewWindow = true;

        return parent::getContent();

    }
}