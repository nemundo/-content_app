<?php

namespace Nemundo\Content\App\Widget\Content\UniqueId;

use Nemundo\Content\Type\AbstractContentItem;

class UniqueIdItem extends AbstractContentItem
{

    protected function loadItem()
    {
        $this->contentType=new UniqueIdType();
        // TODO: Implement loadItem() method.
    }




}