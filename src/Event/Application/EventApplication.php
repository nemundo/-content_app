<?php

namespace Nemundo\Content\App\Event\Application;

use Nemundo\App\Application\Type\AbstractApplication;
use Nemundo\Content\App\Event\Install\EventInstall;
use Nemundo\Content\App\Event\Site\EventSite;

class EventApplication extends AbstractApplication
{
    protected function loadApplication()
    {
        $this->application = 'Event';
        $this->applicationId = 'a2a17aa4-99e8-49b5-9258-3ff7a023365d';
        $this->installClass=EventInstall::class;
        $this->appSiteClass = EventSite::class;

    }
}