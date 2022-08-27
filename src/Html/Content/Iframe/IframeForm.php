<?php

namespace Nemundo\Content\App\Html\Content\Iframe;

use Nemundo\Admin\Com\ListBox\AdminTextBox;
use Nemundo\Content\App\Html\Data\IframeWidget\IframeWidgetModel;
use Nemundo\Content\Form\AbstractContentForm;

class IframeForm extends AbstractContentForm
{

    /**
     * @var AdminTextBox
     */
    private $src;

    public function getContent()
    {

        $model = new IframeWidgetModel();

        $this->src = new AdminTextBox($this);
        $this->src->label = $model->src->label;

        return parent::getContent();
    }


    protected function loadUpdateForm()
    {

        $iframeRow = (new IframeItem($this->dataId))->getDataRow();
        $this->src->value = $iframeRow->src;

    }


    protected function onSave()
    {

        $builder = new IframeBuilder($this->dataId);
        $builder->src = $this->src->getValue();
        $builder->addActionList($this->getActionList());
        $builder->buildContent();

    }
}