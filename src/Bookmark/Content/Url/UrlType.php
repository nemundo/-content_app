<?php

namespace Nemundo\Content\App\Bookmark\Content\Url;

use Nemundo\Content\Type\AbstractContentType;

class UrlType extends AbstractContentType
{
    protected function loadContentType()
    {
        $this->typeLabel = 'Url (only)';
        $this->typeId = 'd5df80c6-4ade-41bb-93bc-8d214af49854';
        $this->formClassList[] = UrlForm::class;
        $this->viewClassList[] = UrlView::class;
        $this->itemClass = UrlItem::class;
    }
}