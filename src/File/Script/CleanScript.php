<?php

namespace Nemundo\Content\App\File\Script;

use Nemundo\App\Script\Type\AbstractConsoleScript;
use Nemundo\Content\App\File\Application\FileApplication;
use Nemundo\Content\App\File\Content\Audio\AudioType;
use Nemundo\Content\App\File\Content\Document\DocumentType;
use Nemundo\Content\App\File\Content\Image\ImageType;
use Nemundo\Content\App\File\Content\Video\VideoType;
use Nemundo\Content\Setup\ContentTypeRemove;

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