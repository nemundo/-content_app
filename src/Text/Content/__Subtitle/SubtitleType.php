<?php

namespace Nemundo\Content\App\Text\Content\Subtitle;

use Nemundo\Content\Type\AbstractContentType;

class SubtitleType extends AbstractContentType
{
    protected function loadContentType()
    {
        $this->typeLabel = 'Subtitle';
        $this->typeId = '43509329-9654-4f04-bbd2-7adaaf142432';
        $this->formClassList[] = SubtitleForm::class;
        $this->viewClassList[] = SubtitleView::class;
        $this->itemClass = SubtitleItem::class;
    }
}