<?php

namespace Nemundo\Content\App\File\Service;

use Bim\App\LargeImage\Content\LargeImage\LargeImageContentType;
use Bim\App\Poi\Action\PoiContentAction;
use Nemundo\Content\App\File\Content\Audio\AudioType;
use Nemundo\Content\App\File\Content\Document\DocumentType;
use Nemundo\Content\App\File\Content\File\FileContentType;
use Nemundo\Content\App\File\Content\Image\ImageType;
use Nemundo\Content\App\File\Content\Video\VideoType;
use Nemundo\Content\Index\Tree\Action\TreeContentAction;
use Nemundo\Content\Service\AbstractContentServiceRequest;
use Nemundo\Core\Debug\Debug;
use Nemundo\Core\File\FileInformation;
use Nemundo\Core\Http\Request\File\FileRequest;
use Nemundo\Core\Http\Request\HttpRequest;
use Nemundo\Core\System\PhpConfig;

class TreeFileUploadService extends AbstractContentServiceRequest
{

    protected function loadService()
    {
        $this->serviceName = 'tree-file-upload';
    }


    public function onRequest()
    {

        (new PhpConfig())->setTimeLimit(180);

        $fileRequest = new FileRequest('file');
        $file = new FileInformation($fileRequest->filename);

        $type = new FileContentType();
        $hasImage = false;

        if ($file->isText()) {
            $type = new DocumentType();
        }

        if ($file->isPdf()) {
            $type = new DocumentType();
        }

        if ($file->isWord()) {
            $type = new DocumentType();
        }

        if ($file->isImage()) {
            $type = new ImageType();  // new LargeImageContentType();
            //$hasImage = true;
        }

        if ($file->isAudio()) {
            $type = new AudioType();
        }

        if ($file->isVideo()) {
            $type = new VideoType();
        }

        $type->file->fromFileRequest($fileRequest);
        $type->saveType();


        //$action->hasImage = $hasImage;

        //(new Debug())->write('upload service');

        $request = new HttpRequest('parent');
        if ($request->hasValue()) {

            //(new Debug())->write('parent');

            $action = new TreeContentAction();
            $action->parentId = $request->getValue();
            $action->onAction($type);


        }








        $this->sendContentOkStatus($type);


    }

}