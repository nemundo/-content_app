<?php

namespace Nemundo\Admin\Com\Form;

use Nemundo\Com\FormBuilder\SearchForm;

class AdminSearchForm extends SearchForm
{

    public function getContent()
    {

        $this->addCssClass('admin-search-form');

        return parent::getContent(); // TODO: Change the autogenerated stub
    }

}