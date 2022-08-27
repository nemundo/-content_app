<?php

namespace Nemundo\Content\App\Widget\Content\UniqueId;

use Nemundo\Content\Form\AbstractContentForm;

class UniqueIdForm extends AbstractContentForm
{

    protected function onSave()
    {

        $builder =new UniqueIdWidgetBuilder();
        $builder->addActionList($this->getActionList());
        $builder->buildContent();

        // TODO: Implement onSave() method.
    }

}