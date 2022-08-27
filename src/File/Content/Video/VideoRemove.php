<?php

namespace Nemundo\Content\App\File\Content\Video;

use Nemundo\Content\App\File\Data\Video\VideoDelete;
use Nemundo\Content\Type\AbstractContentRemove;

class VideoRemove extends AbstractContentRemove
{

    protected function loadRemove()
    {
        $this->contentType=new VideoType();
    }


    protected function onDelete()
    {
        (new VideoDelete())->deleteById($this->dataId);
    }

}