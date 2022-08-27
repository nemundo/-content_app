<?php

namespace Nemundo\Content\App\Text\Content\Html;

use Nemundo\Content\App\Text\Data\LargeText\LargeTextReader;
use Nemundo\Content\App\Text\Data\LargeText\LargeTextRow;
use Nemundo\Content\Type\AbstractContentItem;
use Nemundo\Core\Type\Text\Html;

class HtmlItem extends AbstractContentItem
{

    protected function loadItem()
    {

        $this->contentType = new HtmlType();

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


    public function getData()
    {

        $data['id'] = $this->dataId;
        $data['text'] = $this->getDataRow()->largeText;
        $data['text_html'] = (new Html($this->getDataRow()->largeText))->getValue();

        return $data;

    }


    /*public function importJson($data)
    {

        $this->largeText = $data['text'];
        $this->saveType();

    }*/


    /*public function getSubject()
    {

        $subject = (new Text($this->getDataRow()->largeText))->substring(0, 100)->getValue() . ' ...';
        return $subject;

    }*/

}