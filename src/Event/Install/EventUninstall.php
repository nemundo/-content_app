<?php
namespace Nemundo\Content\App\Event\Install;
use Nemundo\App\Application\Type\Install\AbstractUninstall;
use Nemundo\Model\Setup\ModelCollectionSetup;
use Nemundo\Content\App\Event\Data\EventModelCollection;
use Nemundo\Content\App\Event\Application\EventApplication;
use Nemundo\App\Application\Setup\ApplicationSetup;
class EventUninstall extends AbstractUninstall {
public function uninstall() {
(new ModelCollectionSetup())->removeCollection(new EventModelCollection());
}
}