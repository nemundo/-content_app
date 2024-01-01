<?php

namespace Nemundo\Content\App\File\Page;

use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Content\App\File\Content\Audio\AudioType;
use Nemundo\Content\App\File\Template\FileTemplate;

class AudioPage extends FileTemplate
{
    public function getContent()
    {

        (new AudioType())->getAdmin($this);

        return parent::getContent();
    }
}