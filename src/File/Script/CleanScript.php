<?php

namespace Nemundo\Content\App\File\Script;

use Nemundo\App\Script\Type\AbstractConsoleScript;
use Nemundo\Content\App\File\Application\FileApplication;

class CleanScript extends AbstractConsoleScript
{
    protected function loadScript()
    {
        $this->scriptName = 'file-clean';
    }

    public function run()
    {

        (new FileApplication())->reinstallApp();


    }
}