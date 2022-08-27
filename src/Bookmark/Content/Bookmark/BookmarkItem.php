<?php

namespace Nemundo\Content\App\Bookmark\Content\Bookmark;

use Nemundo\Content\App\Bookmark\Data\Bookmark\BookmarkReader;
use Nemundo\Content\App\Bookmark\Data\Bookmark\BookmarkRow;
use Nemundo\Content\Type\AbstractContentItem;

class BookmarkItem extends AbstractContentItem
{
    protected function loadItem()
    {
        $this->contentType = new BookmarkType();
    }

    protected function onDataRow()
    {
        $this->dataRow = (new BookmarkReader())->getRowById($this->dataId);
    }

    /**
     * @return \Nemundo\Model\Row\AbstractModelDataRow|BookmarkRow
     */
    public function getDataRow()
    {
        return parent::getDataRow();
    }


    public function getSubject()
    {
        return $this->getDataRow()->title;
    }

}