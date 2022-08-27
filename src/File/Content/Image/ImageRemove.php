<?php

namespace Nemundo\Content\App\File\Content\Image;

use Nemundo\Content\App\File\Data\Image\ImageDelete;
use Nemundo\Content\Type\AbstractContentRemove;

class ImageRemove extends AbstractContentRemove
{

    protected function loadRemove()
    {
        $this->contentType = new ImageType();
    }


    protected function onDelete()
    {
        (new ImageDelete())->deleteById($this->dataId);
    }

}