<?php

namespace Nemundo\Content\App\File\Content\Image;

use Nemundo\Content\App\File\Data\Image\Image;
use Nemundo\Content\Type\AbstractContentBuilder;
use Nemundo\Model\Data\Property\File\FileProperty;

class ImageBuilder extends AbstractContentBuilder
{

    /**
     * @var FileProperty
     */
    public $image;


    protected function loadBuilder()
    {

        $this->contentType = new ImageType();
        $this->image = new FileProperty();

    }


    protected function onCreate()
    {

        $data = new Image();
        $data->image->fromFileProperty($this->image);
        $data->orginalFilename = $this->image->getOrginalFilename();
        $this->dataId = $data->save();

    }

}