<?php

namespace Nemundo\Content\App\Text\Content\Text\View;

use Nemundo\Admin\Com\Title\AdminSubtitle;
use Nemundo\Content\View\AbstractContentView;

class SubtitleView extends AbstractTextView
{
    protected function loadView()
    {
        $this->viewName = 'Subtitle';
        $this->viewId = '1ab440e0-3c2c-4887-8381-6dee28d1310c';
        $this->defaultView = true;
    }

    public function getContent()
    {

        $subtitle=new AdminSubtitle($this);
        $subtitle->content=$this->getTextRow()->text;

        return parent::getContent();
    }
}