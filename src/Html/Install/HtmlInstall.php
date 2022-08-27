<?php

namespace Nemundo\Content\App\Html\Install;

use Nemundo\App\Application\Type\Install\AbstractInstall;
use Nemundo\Content\App\Html\Application\HtmlApplication;
use Nemundo\Content\App\Html\Content\Iframe\IframeType;
use Nemundo\Content\App\Html\Content\Img\ImgType;
use Nemundo\Content\App\Html\Data\HtmlModelCollection;
use Nemundo\Content\Setup\ContentTypeSetup;
use Nemundo\Model\Setup\ModelCollectionSetup;

class HtmlInstall extends AbstractInstall
{
    public function install()
    {

        (new ModelCollectionSetup())
            ->addCollection(new HtmlModelCollection());

        (new ContentTypeSetup(new HtmlApplication()))
            ->addContentType(new ImgType())
            ->addContentType(new IframeType());



    }
}