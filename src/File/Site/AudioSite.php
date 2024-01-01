<?php

namespace Nemundo\Content\App\File\Site;

use Nemundo\Content\App\File\Page\AudioPage;
use Nemundo\Web\Site\AbstractSite;

class AudioSite extends AbstractSite
{
    protected function loadSite()
    {
        $this->title = 'Audio';
        $this->url = 'audio';
    }

    public function loadContent()
    {
        (new AudioPage())->render();
    }
}