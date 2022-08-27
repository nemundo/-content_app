<?php

namespace Nemundo\Content\App\Text\Content\RichText;

use Nemundo\Content\App\Text\Data\LargeText\LargeTextReader;
use Nemundo\Content\App\Text\Data\LargeText\LargeTextRow;
use Nemundo\Content\Type\AbstractContentItem;

class RichTextItem extends AbstractContentItem
{

    protected function loadItem()
    {

        $this->contentType=new RichTextType();

    }


    protected function onDataRow()
    {

        $this->dataRow = (new LargeTextReader())->getRowById($this->dataId);

    }


    /**
     * @return \Nemundo\Model\Row\AbstractModelDataRow|LargeTextRow
     */
    public function getDataRow()
    {
        return parent::getDataRow();
    }


}