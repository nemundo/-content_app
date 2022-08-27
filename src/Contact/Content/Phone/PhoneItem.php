<?php

namespace Nemundo\Content\App\Contact\Content\Phone;

use Nemundo\Content\App\Contact\Data\Phone\PhoneReader;
use Nemundo\Content\App\Contact\Data\Phone\PhoneRow;
use Nemundo\Content\Type\AbstractContentItem;

class PhoneItem extends AbstractContentItem
{

    protected function loadItem()
    {
        $this->contentType=new PhoneType();
        // TODO: Implement loadItem() method.
    }


    protected function onDataRow()
    {
        $this->dataRow=(new PhoneReader())->getRowById($this->dataId);
    }

    /**
     * @return \Nemundo\Model\Row\AbstractModelDataRow|PhoneRow
     */
    public function getDataRow()
    {
        return parent::getDataRow();
    }

    public function getSubject()
    {
        return $this->getDataRow()->phone;
    }

}