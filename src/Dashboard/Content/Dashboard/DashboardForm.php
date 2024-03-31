<?php

namespace Nemundo\Content\App\Dashboard\Content\Dashboard;

use Nemundo\Admin\Com\ListBox\AdminTextBox;
use Nemundo\Content\App\Dashboard\Data\Dashboard\DashboardModel;
use Nemundo\Content\Form\AbstractContentForm;

class DashboardForm extends AbstractContentForm
{

    /**
     * @var AdminTextBox
     */
    private $dashboard;


    public function getContent()
    {

        $model = new DashboardModel();

        $this->dashboard = new AdminTextBox($this);
        $this->dashboard->label = $model->dashboard->label;
        $this->dashboard->validation= true;

        return parent::getContent();
    }

    protected function onSave()
    {

        $builder = new DashboardBuilder($this->dataId);
        $builder->dashboard = $this->dashboard->getValue();
        $builder->buildContent();

    }
}