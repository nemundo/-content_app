<?php

namespace Nemundo\Content\App\Text\Content\Text;

use Nemundo\Content\App\Text\Data\Text\TextDelete;
use Nemundo\Content\App\Text\Data\Text\TextReader;
use Nemundo\Content\App\Text\Data\Text\TextRow;
use Nemundo\Content\Type\AbstractContentItem;

class TextItem extends AbstractContentItem
{

    protected function loadItem()
    {
        $this->contentType=new TextType();
    }


    protected function onDataRow()
    {
        $this->dataRow = (new TextReader())->getRowById($this->dataId);
    }


    /**
     * @return \Nemundo\Model\Row\AbstractModelDataRow|TextRow
     */
    public function getDataRow()
    {
        return parent::getDataRow();
    }


    public function getSubject()
    {

        return $this->getDataRow()->text;
    }


    public function getData()
    {

        $data['id'] = $this->dataId;
        $data['text'] = $this->getDataRow()->text;

        return $data;

    }


}