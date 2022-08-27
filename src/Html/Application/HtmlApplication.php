<?php

namespace Nemundo\Content\App\Html\Application;

use Nemundo\App\Application\Type\AbstractApplication;
use Nemundo\Content\App\Html\Install\HtmlInstall;

class HtmlApplication extends AbstractApplication
{
    protected function loadApplication()
    {
        $this->application = 'Html';
        $this->applicationId = '3ecbf507-8cf8-4a03-86fb-bfdc05a2c6ec';
        $this->installClass=HtmlInstall::class;
    }
}