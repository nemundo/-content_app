<?php

namespace Nemundo\Content\App\Text\Content\Text\View;

use Nemundo\Content\App\Text\Content\Text\TextItem;
use Nemundo\Content\View\AbstractContentView;

abstract class AbstractTextView extends AbstractContentView
{

    protected function getTextRow()
    {

        $textRow = (new TextItem($this->dataId))->getDataRow();
        return $textRow;

    }

}