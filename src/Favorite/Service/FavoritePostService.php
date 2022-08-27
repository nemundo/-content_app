<?php

namespace Nemundo\Content\App\Favorite\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\Favorite\Action\FavoriteContentAction;
use Nemundo\Content\Builder\ContentBuilder;
use Nemundo\Core\Http\Request\Post\PostRequest;

class FavoritePostService extends AbstractServiceRequest
{

    protected function loadService()
    {

        $this->serviceName = 'favorite-post';

    }


    public function onRequest()
    {

        $content = (new ContentBuilder())->getContent((new PostRequest('content'))->getValue());

        $action = new FavoriteContentAction();
        $action->onAction($content);

        $this->sendOkStatus();

    }

}