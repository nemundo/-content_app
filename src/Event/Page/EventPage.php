<?php

namespace Nemundo\Content\App\Event\Page;

use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Content\App\Event\Content\Event\EventType;

class EventPage extends AbstractTemplateDocument
{
    public function getContent()
    {

        (new EventType())->getAdmin($this);

        return parent::getContent();
    }
}