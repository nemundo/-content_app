<?php

namespace Nemundo\Content\App\Favorite\Script;

use Nemundo\App\Script\Type\AbstractConsoleScript;
use Nemundo\Content\App\Favorite\Application\FavoriteApplication;

class CleanScript extends AbstractConsoleScript
{
    protected function loadScript()
    {
        $this->scriptName = 'favorite-clean';
    }

    public function run()
    {
        (new FavoriteApplication())->reinstallApp();
    }
}