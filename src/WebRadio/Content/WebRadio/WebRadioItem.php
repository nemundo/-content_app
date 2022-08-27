<?php

namespace Nemundo\Content\App\WebRadio\Content\WebRadio;

use Nemundo\Content\App\WebRadio\Data\WebRadio\WebRadioReader;
use Nemundo\Content\App\WebRadio\Data\WebRadio\WebRadioRow;
use Nemundo\Content\Type\AbstractContentItem;

class WebRadioItem extends AbstractContentItem
{

    protected function loadItem()
    {
        $this->contentType=new WebRadioType();
        // TODO: Implement loadItem() method.
    }

    protected function onDataRow()
    {
        $this->dataRow = (new WebRadioReader())->getRowById($this->dataId);
    }

    /**
     * @return \Nemundo\Model\Row\AbstractModelDataRow|WebRadioRow
     */
    public function getDataRow()
    {
        return parent::getDataRow();
    }

    public function getSubject()
    {
        return $this->getDataRow()->webRadio;
    }


    public function getData()
    {

        $webradioRow = $this->getDataRow();

        $data = [];
        $data['id'] = $webradioRow->id;
        $data['web_radio'] = $webradioRow->webRadio;
        $data['stream_url'] = $webradioRow->streamUrl;

        return $data;

    }



}