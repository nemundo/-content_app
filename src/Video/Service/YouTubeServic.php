<?php


namespace Nemundo\Content\App\Video\Service;


use Nemundo\Content\App\Video\Content\YouTube\YouTubeType;
use Nemundo\Content\Index\Log\Action\LogIndexContentAction;
use Nemundo\Content\Service\AbstractContentServiceRequest;
use Nemundo\Core\Http\Request\HttpRequest;

class YouTubeServic extends AbstractContentServiceRequest
{

    protected function loadService()
    {
        $this->serviceName = 'youtube-post';
    }


    public function onRequest()
    {

        $url = (new HttpRequest('url'))->getValue();

        $contentType = new YouTubeType();
        $contentType->fromUrl($url);

        /*(new LogIndexAction())->onAction($contentType);
        $this->saveTree($contentType);*/

        $this->sendContentOkStatus($contentType);

    }

}