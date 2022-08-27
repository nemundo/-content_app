<?php

namespace Nemundo\Content\App\File\Service\Video;


use Nemundo\Content\App\File\Content\Video\VideoType;
use Nemundo\Content\Service\AbstractContentServiceRequest;
use Nemundo\Core\Http\Request\File\FileRequest;

class VideoPostServiceRequest extends AbstractContentServiceRequest
{

    protected function loadService()
    {

        $this->serviceName = 'video-post';

    }


    public function onRequest()
    {

        $contentType = new VideoType();
        $contentType->file->fromFileRequest((new FileRequest('file')));
        $contentType->saveType();

        $this->sendContentOkStatus($contentType);

    }


}