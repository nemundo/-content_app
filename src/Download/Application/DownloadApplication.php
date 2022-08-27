<?php

namespace Nemundo\Content\App\Download\Application;

use Nemundo\App\Application\Type\AbstractApplication;
use Nemundo\Content\App\Download\Install\DownloadInstall;

class DownloadApplication extends AbstractApplication
{
    protected function loadApplication()
    {
        $this->application = 'Download';
        $this->applicationId = '0ac3f2d6-4362-4ab4-a39c-41e562e663fa';
        $this->installClass = DownloadInstall::class;
    }
}