<?php

namespace Nemundo\Content\App\Note\Service;

use Nemundo\Content\App\Note\Content\Note\NoteType;
use Nemundo\Content\Service\AbstractContentServiceRequest;
use Nemundo\Core\Http\Request\HttpRequest;

class NotePostService extends AbstractContentServiceRequest
{

    protected function loadService()
    {

        $this->serviceName = 'note-post';

    }


    public function onRequest()
    {

        $type = new NoteType();

        $request=new HttpRequest('data_id');
        if ($request->hasValue()) {
            $type->fromDataId($request->getValue());
        }

        $type->title = (new HttpRequest('title'))->getValue();
        $type->text = (new HttpRequest('text'))->getValue();
        $type->saveType();

        $this->sendContentOkStatus($type);

    }

}