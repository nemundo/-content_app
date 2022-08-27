<?php

namespace Nemundo\Content\App\Html\Content\Iframe;

use Nemundo\Content\Type\AbstractContentType;

class IframeType extends AbstractContentType
{
    protected function loadContentType()
    {
        $this->typeLabel = 'Iframe';
        $this->typeId = '03ba7d6d-caa3-494d-8525-e3425214fc21';
        $this->formClassList[] = IframeForm::class;
        $this->viewClassList[] = IframeView::class;
        $this->itemClass = IframeItem::class;
    }
}