<?php

namespace Nemundo\Content\App\File\Content\Video\Form;


use Nemundo\Content\App\File\Content\Base\Form\AbstractUrlForm;
use Nemundo\Content\App\File\Content\Video\VideoBuilder;

class VideoUrlForm extends AbstractUrlForm
{

    protected function onSave()
    {

        $builder=new VideoBuilder();
        $builder->video->fromUrl($this->url->getValue());
        $builder->addActionList($this->getActionList());
        $builder->buildContent();

    }

}