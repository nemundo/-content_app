<?php

namespace Nemundo\Content\App\Html\Content\Iframe;

use Nemundo\Content\App\Html\Data\IframeWidget\IframeWidgetReader;
use Nemundo\Content\App\Html\Data\IframeWidget\IframeWidgetRow;
use Nemundo\Content\Type\AbstractContentItem;

class IframeItem extends AbstractContentItem
{
    protected function loadItem()
    {
        $this->contentType = new IframeType();
    }

    protected function onDataRow()
    {
        $this->dataRow = (new IframeWidgetReader())->getRowById($this->dataId);
    }

    /**
     * @return \Nemundo\Model\Row\AbstractModelDataRow|IframeWidgetRow
     */
    public function getDataRow()
    {
        return parent::getDataRow();
    }
}