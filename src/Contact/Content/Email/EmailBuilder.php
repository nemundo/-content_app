<?php

namespace Nemundo\Content\App\Contact\Content\Email;

use Nemundo\Content\App\Contact\Data\Email\Email;
use Nemundo\Content\App\Contact\Data\Email\EmailUpdate;
use Nemundo\Content\Type\AbstractContentBuilder;

class EmailBuilder extends AbstractContentBuilder
{

    public $email;

    protected function loadBuilder()
    {
        $this->contentType = new EmailType();
        // TODO: Implement loadBuilder() method.
    }


    protected function onCreate()
    {

        $data = new Email();
        $data->email = $this->email;
        $this->dataId = $data->save();

    }

    protected function onUpdate()
    {

        $update = new EmailUpdate();
        $update->email = $this->email;
        $update->updateById($this->dataId);

    }

}