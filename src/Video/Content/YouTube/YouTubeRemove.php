<?php

namespace Nemundo\Content\App\Video\Content\YouTube;

use Nemundo\Content\App\Video\Data\YouTube\YouTubeDelete;
use Nemundo\Content\Type\AbstractContentRemove;

class YouTubeRemove extends AbstractContentRemove
{

    protected function loadRemove()
    {
        $this->contentType = new YouTubeType();
    }


    protected function onDelete()
    {
        (new YouTubeDelete())->deleteById($this->dataId);
    }

}