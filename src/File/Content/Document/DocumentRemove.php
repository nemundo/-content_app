<?php

namespace Nemundo\Content\App\File\Content\Document;

use Nemundo\Content\App\File\Data\Document\DocumentDelete;
use Nemundo\Content\Type\AbstractContentRemove;

class DocumentRemove extends AbstractContentRemove
{

    protected function loadRemove()
    {
        $this->contentType = new DocumentType();
    }


    protected function onDelete()
    {
        (new DocumentDelete())->deleteById($this->dataId);
    }

}