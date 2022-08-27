<?php
namespace Nemundo\Content\App\Html\Install;
use Nemundo\App\Application\Type\Install\AbstractUninstall;
use Nemundo\Model\Setup\ModelCollectionSetup;
use Nemundo\Content\App\Html\Data\HtmlModelCollection;
use Nemundo\Content\App\Html\Application\HtmlApplication;
use Nemundo\App\Application\Setup\ApplicationSetup;
class HtmlUninstall extends AbstractUninstall {
public function uninstall() {
(new ModelCollectionSetup())->removeCollection(new HtmlModelCollection());
}
}