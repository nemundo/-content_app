<?php

namespace Nemundo\Content\App\PublicShare\Script;

use Nemundo\App\Script\Type\AbstractConsoleScript;
use Nemundo\Content\App\Favorite\Application\FavoriteApplication;
use Nemundo\Content\App\PublicShare\Application\PublicShareApplication;

class CleanScript extends AbstractConsoleScript
{
    protected function loadScript()
    {
        $this->scriptName = 'publicshare-clean';
    }

    public function run()
    {
        (new PublicShareApplication())->reinstallApp();
    }
}