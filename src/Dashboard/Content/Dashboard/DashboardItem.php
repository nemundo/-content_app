<?php

namespace Nemundo\Content\App\Dashboard\Content\Dashboard;

use Nemundo\Content\App\Dashboard\Data\Dashboard\DashboardReader;
use Nemundo\Content\App\Dashboard\Data\Dashboard\DashboardRow;
use Nemundo\Content\Type\AbstractContentItem;

class DashboardItem extends AbstractContentItem
{
    protected function loadItem()
    {
        $this->contentType = new DashboardType();
    }

    protected function onDataRow()
    {
        $this->dataRow = (new DashboardReader())->getRowById($this->dataId);
    }

    /**
     * @return \Nemundo\Model\Row\AbstractModelDataRow|DashboardRow
     */
    public function getDataRow()
    {
        return parent::getDataRow();
    }

    public function getSubject()
    {
        return $this->getDataRow()->dashboard;
    }


}