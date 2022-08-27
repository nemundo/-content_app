<?php
namespace Nemundo\Content\App\Download\Install;
use Nemundo\App\Application\Type\Install\AbstractUninstall;
use Nemundo\Model\Setup\ModelCollectionSetup;
use Nemundo\Content\App\Download\Data\DownloadModelCollection;
use Nemundo\Content\App\Download\Application\DownloadApplication;
use Nemundo\App\Application\Setup\ApplicationSetup;
class DownloadUninstall extends AbstractUninstall {
public function uninstall() {
(new ModelCollectionSetup())->removeCollection(new DownloadModelCollection());
}
}