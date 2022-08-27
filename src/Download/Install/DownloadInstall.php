<?php

namespace Nemundo\Content\App\Download\Install;

use Nemundo\App\Application\Type\Install\AbstractInstall;
use Nemundo\Content\Action\Setup\ActionSetup;
use Nemundo\Content\App\Download\Action\DownloadAction;
use Nemundo\Content\App\Download\Data\DownloadModelCollection;
use Nemundo\Model\Setup\ModelCollectionSetup;

class DownloadInstall extends AbstractInstall
{
    public function install()
    {
       // (new ModelCollectionSetup())->addCollection(new DownloadModelCollection());

        (new ActionSetup())->addContentAction(new DownloadAction());


    }
}