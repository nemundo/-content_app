<?php

namespace Nemundo\Content\App\Download\Action;

use Nemundo\Content\Action\AbstractContentAction;

class DownloadAction extends AbstractContentAction
{

    protected function loadAction()
    {

        $this->actionLabel = 'Download';
        $this->actionId = '5176c24b-e0df-4095-881d-8c105a4259f2';
        $this->viewClass = DownloadActionView::class;

    }

}