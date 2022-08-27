<?php

namespace Nemundo\Content\App\Explorer\Content\Container;

use Nemundo\Content\App\Explorer\Data\Container\ContainerReader;
use Nemundo\Content\App\Explorer\Data\Container\ContainerRow;
use Nemundo\Content\Type\AbstractContentItem;
use Nemundo\Core\Type\Text\Html;

class ContainerItem extends AbstractContentItem
{

    protected function loadItem()
    {
        $this->contentType = new ContainerType();
    }


    protected function onDataRow()
    {

        $this->dataRow = (new ContainerReader())->getRowById($this->dataId);

    }

    /**
     * @return \Nemundo\Content\App\Explorer\Data\Container\ContainerRow|\Nemundo\Model\Row\AbstractModelDataRow|ContainerRow
     */
    public function getDataRow()
    {
        return parent::getDataRow();
    }


    public function getSubject()
    {
        return $this->getDataRow()->container;
    }


    public function getData()
    {

        $contentRow = $this->getDataRow();

        $row = [];
        $row['id'] = $contentRow->id;
        $row['container'] = $contentRow->container;
        $row['description'] = (new Html($contentRow->description))->getValue();
        $row['content_id'] = $this->getContentId();

        return $row;

    }

}