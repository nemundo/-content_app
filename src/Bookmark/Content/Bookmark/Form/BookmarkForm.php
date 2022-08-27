<?php

namespace Nemundo\Content\App\Bookmark\Content\Bookmark\Form;

use Nemundo\Admin\Com\ListBox\AdminTextBox;
use Nemundo\Content\App\Bookmark\Content\Bookmark\BookmarkBuilder;
use Nemundo\Content\Form\AbstractContentForm;
use Nemundo\Core\Validation\ValidationType;

class BookmarkForm extends AbstractContentForm
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

        $builder = new BookmarkBuilder($this->dataId);
        $builder->addActionList($this->getActionList());
        $builder->fromUrl($this->url->getValue());

    }

}