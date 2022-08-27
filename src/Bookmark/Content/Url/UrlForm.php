<?php

namespace Nemundo\Content\App\Bookmark\Content\Url;

use Nemundo\Admin\Com\ListBox\AdminTextBox;
use Nemundo\Content\Form\AbstractContentForm;
use Nemundo\Core\Validation\ValidationType;

class UrlForm extends AbstractContentForm
{

    /**
     * @var AdminTextBox
     */
    private $url;

    public function getContent()
    {

        $this->url = new AdminTextBox($this);
        $this->url->label = 'Url';
        $this->url->validation = true;
        $this->url->validationType = ValidationType::IS_URL;

        return parent::getContent();

    }


    protected function onSave()
    {

        $builder = new UrlBuilder($this->dataId);
        $builder->url = $this->url->getValue();
        $builder->buildContent();

    }

}