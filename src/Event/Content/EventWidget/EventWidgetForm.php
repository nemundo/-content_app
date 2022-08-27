<?php

namespace Nemundo\Content\App\Event\Content\EventWidget;

use Nemundo\Content\Form\AbstractContentForm;

class EventWidgetForm extends AbstractContentForm
{
    public function getContent()
    {
        return parent::getContent();
    }

    protected function onSave()
    {

        $builder=new EventWidgetBuilder($this->dataId);
        $builder->addActionList($this->getActionList());
        $builder->buildContent();

    }
}