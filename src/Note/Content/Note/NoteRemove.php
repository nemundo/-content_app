<?php

namespace Nemundo\Content\App\Note\Content\Note;

use Nemundo\Content\App\Note\Data\Note\NoteDelete;
use Nemundo\Content\Type\AbstractContentRemove;

class NoteRemove extends AbstractContentRemove
{

    protected function loadRemove()
    {
        $this->contentType = new NoteType();
    }


    protected function onDelete()
    {

        (new NoteDelete())->deleteById($this->dataId);

    }

}