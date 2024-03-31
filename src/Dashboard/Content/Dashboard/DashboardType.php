<?php

namespace Nemundo\Content\App\Dashboard\Content\Dashboard;

use Nemundo\Content\Type\AbstractContentType;

class DashboardType extends AbstractContentType
{
    protected function loadContentType()
    {
        $this->typeLabel = 'Dashboard';
        $this->typeId = 'dceeecd1-2eeb-4dab-aa2e-0e3fe91d4823';
        $this->formClassList[] = DashboardForm::class;
        $this->viewClassList[] = DashboardView::class;
        $this->itemClass = DashboardItem::class;
    }
}