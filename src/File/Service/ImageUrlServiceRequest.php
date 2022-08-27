<?php

namespace Nemundo\Content\App\File\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\File\Content\Image\ImageType;
use Nemundo\Core\Http\Request\Post\PostRequest;

class ImageUrlServiceRequest extends AbstractServiceRequest
{

    protected function loadService()
    {

        $this->serviceName = 'file-image-url';

    }


    public function onRequest()
    {

        $url = (new PostRequest('url'))->getValue();

        $contentType = new ImageType();
        $contentType->file->fromUrl($url);
        $contentType->saveType();

        $this->sendOkStatus();

    }


}