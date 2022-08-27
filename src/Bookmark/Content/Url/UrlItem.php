<?php

namespace Nemundo\Content\App\Bookmark\Content\Url;

use Nemundo\Content\App\Bookmark\Data\Url\UrlReader;
use Nemundo\Content\App\Bookmark\Data\Url\UrlRow;
use Nemundo\Content\Type\AbstractContentItem;

class UrlItem extends AbstractContentItem
{
    protected function loadItem()
    {
        $this->contentType = new UrlType();
    }

    protected function onDataRow()
    {
        $this->dataRow = (new UrlReader())->getRowById($this->dataId);
    }

    /**
     * @return \Nemundo\Model\Row\AbstractModelDataRow|UrlRow
     */
    public function getDataRow()
    {
        return parent::getDataRow();
    }

    public function getSubject()
    {

        return $this->getDataRow()->url;

    }


}