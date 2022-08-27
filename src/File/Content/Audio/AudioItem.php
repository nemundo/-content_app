<?php

namespace Nemundo\Content\App\File\Content\Audio;

use Nemundo\Content\App\File\Data\Audio\AudioReader;
use Nemundo\Content\App\File\Data\Audio\AudioRow;
use Nemundo\Content\Index\Download\DownloadIndexTrait;
use Nemundo\Content\Type\AbstractContentItem;

class AudioItem extends AbstractContentItem
{

    use DownloadIndexTrait;

    protected function loadItem()
    {
        $this->contentType = new AudioType();
    }


    protected function onDataRow()
    {
        $this->dataRow = (new AudioReader())->getRowById($this->dataId);
    }


    /**
     * @return \Nemundo\Model\Row\AbstractModelDataRow|AudioRow
     */
    public function getDataRow()
    {
        return parent::getDataRow();
    }


    public function getSubject()
    {
        return $this->getDataRow()->orginalFilename;
    }


    public function getDownloadUrl()
    {
        return $this->getDataRow()->audio->getUrl();
    }


    public function getData()
    {

        $data = [];
        $data['filename'] = $this->getDataRow()->audio->getFilename();
        $data['url'] = $this->getDataRow()->audio->getUrl();
        return $data;

    }

}