<?php

namespace Nemundo\Content\App\Html\Content\Img;

use Nemundo\Admin\Com\ListBox\AdminTextBox;
use Nemundo\Content\App\Html\Data\ImgProperty\ImgPropertyModel;
use Nemundo\Content\Form\AbstractContentForm;


class ImgForm extends AbstractContentForm
{

    /**
     * @var AdminTextBox
     */
    private $src;

    public function getContent()
    {

        $model = new ImgPropertyModel();

        $this->src = new AdminTextBox($this);
        $this->src->label = $model->src->label;
        $this->src->validation = true;

        return parent::getContent();
    }


    protected function loadUpdateForm()
    {

        $dataRow = (new ImgItem($this->dataId))->getDataRow();
        $this->src->value = $dataRow->src;

    }


    protected function onSave()
    {

        $builder = new ImgBuilder($this->dataId);
        $builder->src = $this->src->getValue();
        $builder->addActionList($this->getActionList());
        $builder->buildContent();

    }


}