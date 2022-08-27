<?php

namespace Nemundo\Content\App\Event\Install;

use Nemundo\App\Application\Type\Install\AbstractInstall;
use Nemundo\Content\App\Event\Content\Event\EventType;
use Nemundo\Content\App\Event\Content\EventWidget\EventWidgetType;
use Nemundo\Content\Setup\ContentTypeSetup;
use Nemundo\Model\Setup\ModelCollectionSetup;
use Nemundo\Content\App\Event\Data\EventModelCollection;
use Nemundo\Content\App\Event\Application\EventApplication;
use Nemundo\App\Application\Setup\ApplicationSetup;

class EventInstall extends AbstractInstall
{
    public function install()
    {

        (new ModelCollectionSetup())
            ->addCollection(new EventModelCollection());

        (new ContentTypeSetup())
            ->addContentType(new EventType())
            ->addContentType(new EventWidgetType());

    }
}