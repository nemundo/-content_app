<?php

namespace Nemundo\Admin\Com\Form\Text;

use Nemundo\Admin\Com\ListBox\AdminTextBox;
use Nemundo\Core\Debug\Debug;
use Nemundo\Core\Language\LanguageConfig;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Paragraph\Paragraph;

abstract class AbstractTranslationBox extends Div
{

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $autofocus = false;

    /**
     * @var string|string[]
     */
    public $label;

    /**
     * @var AdminTextBox[]
     */
    private $languageTextBoxList = [];


    private $p;


    protected function loadContainer()
    {


        parent::loadContainer(); // TODO: Change the autogenerated stub

        $this->p = new Paragraph($this);

    }


    public function getContent()
    {

        $this->p->content = $this->label;

       /* foreach ((new LanguageConfig())->getLanguageList() as $language) {

            $this->languageTextBoxList[$language] = new AdminTextBox($this);
            $this->languageTextBoxList[$language]->label = $language;

        }*/

        //(new Debug())->write($this->languageTextBoxList);

        return parent::getContent();

    }


    public function getValue()
    {

        //(new Debug())->write($this->languageTextBoxList);

        $data = [];

        foreach ((new LanguageConfig())->getLanguageList() as $language) {
            $data[$language] = $this->languageTextBoxList[$language]->getValue();
        }

        return $data;

    }

}