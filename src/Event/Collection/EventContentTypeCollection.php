<?php

namespace Nemundo\Content\App\Event\Collection;

use Nemundo\Content\App\File\Content\Image\ImageType;
use Nemundo\Content\App\Text\Content\Text\TextType;
use Nemundo\Content\Collection\AbstractContentTypeCollection;

class EventContentTypeCollection extends AbstractContentTypeCollection
{

    protected function loadCollection()
    {

        $this->addContentType(new ImageType())->addContentType(new TextType());

        // TODO: Implement loadCollection() method.
    }

}