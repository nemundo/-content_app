<?php

namespace Nemundo\Content\App\Event\Site;

use Nemundo\Format\Vcard\Vcard;
use Nemundo\Web\Site\AbstractSite;
use Nemundo\Content\App\Event\Page\EventPage;

class EventSite extends AbstractSite
{
    protected function loadSite()
    {
        $this->title = 'Event';
        $this->url = 'event';

        //new VcardSite($this);

    }

    public function loadContent()
    {
        (new EventPage())->render();
    }
}