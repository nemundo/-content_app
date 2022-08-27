<?php

namespace Nemundo\Content\App\File\Content\Video;

use Nemundo\Content\App\File\Data\Video\VideoReader;
use Nemundo\Content\App\File\Data\Video\VideoRow;
use Nemundo\Content\Index\Download\DownloadIndexTrait;
use Nemundo\Content\Type\AbstractContentItem;

class VideoItem extends AbstractContentItem
{

    use DownloadIndexTrait;

    protected function loadItem()
    {
        $this->contentType = new VideoType();
    }


    protected function onDataRow()
    {
        $this->dataRow = (new VideoReader())->getRowById($this->dataId);
    }


    /**
     * @return \Nemundo\Model\Row\AbstractModelDataRow|VideoRow
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
        return $this->getDataRow()->video->getUrl();
    }


    public function getData()
    {

        $data = [];
        $data['filename'] = $this->getDataRow()->video->getFilename();
        $data['url'] = $this->getDataRow()->video->getUrl();
        return $data;

    }


}