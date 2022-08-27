<?php

namespace Nemundo\Content\App\File\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\File\Content\Image\ImageType;
use Nemundo\Core\Http\Request\File\FileRequest;
use Nemundo\Core\Http\Request\HttpRequest;

class ImageDeleteServiceRequest extends AbstractServiceRequest
{

    protected function loadService()
    {

        $this->serviceName = 'image-delete';

    }


    public function onRequest()
    {

        $id = (new HttpRequest('id'))->getValue();

        $contentType = new ImageType($id);
        $contentType->deleteType();

        $this->sendOkStatus();

    }


}