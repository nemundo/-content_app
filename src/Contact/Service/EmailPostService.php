<?php

namespace Nemundo\Content\App\Contact\Service;

use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\Contact\Content\Contact\ContactType;
use Nemundo\Content\App\Contact\Content\Email\EmailType;
use Nemundo\Core\Http\Request\HttpRequest;

class EmailPostService extends AbstractServiceRequest
{
    
    protected function loadService()
    {
        $this->serviceName='contact-email-post';
    }
    
    
    public function onRequest()
    {


        $contentType= new EmailType();
        $contentType->email = (new HttpRequest('email'))->getValue();
        $contentType->saveType();

        $this->sendOkStatus();

    }


}