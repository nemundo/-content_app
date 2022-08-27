<?php

namespace Nemundo\Content\App\Explorer\Content\Container;

use Nemundo\Content\App\Explorer\Data\Container\ContainerDelete;
use Nemundo\Content\Type\AbstractContentRemove;

class ContainerRemove extends AbstractContentRemove
{

    protected function loadRemove()
    {
        $this->contentType = new ContainerType();
    }


    protected function onDelete()
    {
        (new ContainerDelete())->deleteById($this->dataId);
    }


}