<?php

namespace Nemundo\Content\App\File\Content\Document;

use Nemundo\Content\App\File\Data\Document\DocumentReader;
use Nemundo\Content\App\File\Data\Document\DocumentRow;
use Nemundo\Content\Index\Download\DownloadIndexTrait;
use Nemundo\Content\Type\AbstractContentItem;
use Nemundo\Core\File\FileSize;

class DocumentItem extends AbstractContentItem
{

    use DownloadIndexTrait;

    protected function loadItem()
    {
        $this->contentType = new DocumentType();
    }


    protected function onDataRow()
    {
        $this->dataRow = (new DocumentReader())->getRowById($this->dataId);
    }


    /**
     * @return \Nemundo\Model\Row\AbstractModelDataRow|DocumentRow
     */
    public function getDataRow()
    {
        return parent::getDataRow();
    }


    public function getSubject()
    {
        return $this->getDataRow()->document->getFilename();
    }


    public function getText()
    {
        return $this->getDataRow()->text;
    }


    public function getDownloadUrl()
    {
        return $this->getDataRow()->document->getUrl();
    }


    public function getData()
    {

        $data = [];
        $data['filename'] = $this->getDataRow()->document->getFilename();
        $data['fileextension'] = $this->getDataRow()->document->getFileExtension();
        $data['filesize'] = $this->getDataRow()->document->getFileSize();
        $data['filesize_text'] = (new FileSize($this->getDataRow()->document->getFileSize()))->getText();
        $data['url'] = $this->getDataRow()->document->getUrl();
        $data['text'] = $this->getDataRow()->text;

        return $data;

    }


}