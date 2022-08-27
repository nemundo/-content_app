<?php

namespace Nemundo\Content\App\Html\Content\Img;

use Nemundo\Content\App\Html\Data\ImgProperty\ImgPropertyReader;
use Nemundo\Content\App\Html\Data\ImgProperty\ImgPropertyRow;
use Nemundo\Content\Type\AbstractContentItem;

class ImgItem extends AbstractContentItem
{

    protected function loadItem()
    {
        $this->contentType = new ImgType();
    }

    protected function onDataRow()
    {
        $this->dataRow = (new ImgPropertyReader())->getRowById($this->dataId);
    }

    /**
     * @return \Nemundo\Model\Row\AbstractModelDataRow|ImgPropertyRow
     */
    public function getDataRow()
    {
        return parent::getDataRow();
    }


}