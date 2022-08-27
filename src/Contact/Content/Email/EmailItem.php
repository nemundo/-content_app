<?php

namespace Nemundo\Content\App\Contact\Content\Email;

use Nemundo\Content\App\Contact\Data\Email\EmailReader;
use Nemundo\Content\App\Contact\Data\Email\EmailRow;
use Nemundo\Content\Type\AbstractContentItem;

class EmailItem extends AbstractContentItem
{

    protected function loadItem()
    {
        $this->contentType = new EmailType();
    }


    protected function onDataRow()
    {
        $this->dataRow = (new EmailReader())->getRowById($this->dataId);
    }

    /**
     * @return \Nemundo\Model\Row\AbstractModelDataRow|EmailRow
     */
    public function getDataRow()
    {
        return parent::getDataRow();
    }


    public function getSubject()
    {
        return $this->getDataRow()->email;
    }

}