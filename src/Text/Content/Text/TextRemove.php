<?php

namespace Nemundo\Content\App\Text\Content\Text;

use Nemundo\Content\App\Text\Data\Text\TextDelete;
use Nemundo\Content\Type\AbstractContentRemove;

class TextRemove extends AbstractContentRemove
{

    protected function loadRemove()
    {
        $this->contentType=new TextType();
    }


    protected function onDelete()
    {
        (new TextDelete())->deleteById($this->dataId);
    }

}