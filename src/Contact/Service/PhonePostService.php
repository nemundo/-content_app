<?php

namespace Nemundo\Content\App\Contact\Service;

use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\Contact\Content\Contact\ContactType;
use Nemundo\Content\App\Contact\Content\Phone\PhoneType;
use Nemundo\Core\Http\Request\HttpRequest;

class PhonePostService extends AbstractServiceRequest
{
    
    protected function loadService()
    {

        $this->serviceName='contact-phone-post';

    }
    
    
    public function onRequest()
    {

        $contentType= new PhoneType();
        $contentType->phone = (new HttpRequest('phone'))->getValue();
        $contentType->saveType();

        $this->sendOkStatus();

    }


}