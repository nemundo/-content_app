<?php

namespace Nemundo\Content\App\WebRadio\Content\WebRadio;

use Nemundo\Content\App\WebRadio\Data\WebRadio\WebRadioDelete;
use Nemundo\Content\Type\AbstractContentRemove;

class WebRadioContentRemove extends AbstractContentRemove
{

    public function onDelete($dataId)
    {

        (new WebRadioDelete())->deleteById($dataId);
        $this->deleteIndex((new WebRadioType($dataId)));

    }

}