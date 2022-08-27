<?php

namespace Nemundo\Content\App\File\Content\Audio;

use Nemundo\Content\App\File\Data\Audio\Audio;
use Nemundo\Content\Type\AbstractContentBuilder;
use Nemundo\Model\Data\Property\File\FileProperty;

class AudioBuilder extends AbstractContentBuilder
{

    /**
     * @var FileProperty
     */
    public $audio;

    protected function loadBuilder()
    {

        $this->contentType = new AudioType();
        $this->audio = new FileProperty();

    }


    protected function onCreate()
    {

        $data = new Audio();
        $data->audio->fromFileProperty($this->audio);
        $data->orginalFilename = $this->audio->getOrginalFilename();
        $this->dataId = $data->save();

    }

}