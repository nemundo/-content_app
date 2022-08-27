<?php

namespace Nemundo\Content\App\File\Content\Video;

use Nemundo\Content\App\File\Data\Video\Video;
use Nemundo\Content\Type\AbstractContentBuilder;
use Nemundo\Model\Data\Property\File\FileProperty;

class VideoBuilder extends AbstractContentBuilder
{

    /**
     * @var FileProperty
     */
    public $video;

    protected function loadBuilder()
    {

        $this->contentType = new VideoType();
        $this->video = new FileProperty();

    }


    protected function onCreate()
    {

        $data = new Video();
        $data->video->fromFileProperty($this->video);
        $data->orginalFilename = $this->video->getOrginalFilename();
        $this->dataId = $data->save();

    }

}