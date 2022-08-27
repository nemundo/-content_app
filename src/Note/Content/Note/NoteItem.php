<?php

namespace Nemundo\Content\App\Note\Content\Note;

use Nemundo\Content\App\Note\Data\Note\NoteReader;
use Nemundo\Content\App\Note\Data\Note\NoteRow;
use Nemundo\Content\Type\AbstractContentItem;

class NoteItem extends AbstractContentItem
{

    protected function loadItem()
    {
        $this->contentType=new NoteType();
    }


    protected function onDataRow()
    {
        $this->dataRow = (new NoteReader())->getRowById($this->dataId);
    }

    /**
     * @return \Nemundo\Model\Row\AbstractModelDataRow|NoteRow
     */
    public function getDataRow()
    {
        return parent::getDataRow();
    }


    public function getSubject()
    {
        return $this->getDataRow()->title;
    }


    public function getData()
    {

        $data = [];
        $data['id'] = $this->getDataRow()->id;
        $data['title'] = $this->getDataRow()->title;
        $data['text'] = $this->getDataRow()->text;

        return $data;

    }




}