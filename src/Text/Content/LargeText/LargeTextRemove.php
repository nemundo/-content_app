<?php

namespace Nemundo\Content\App\Text\Content\LargeText;

use Nemundo\Content\App\Text\Data\LargeText\LargeTextDelete;
use Nemundo\Content\Type\AbstractContentRemove;

class LargeTextRemove extends AbstractContentRemove
{

    protected function loadRemove()
    {
        $this->contentType=new LargeTextType();
    }


    protected function onDelete()
    {
        (new LargeTextDelete())->deleteById($this->dataId);
    }

}