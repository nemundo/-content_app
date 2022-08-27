<?php

namespace Nemundo\Content\App\Print\Action;

use Nemundo\Admin\Com\Button\AdminIconSiteButton;
use Nemundo\Content\Action\AbstractActionView;
use Nemundo\Content\App\Print\Site\ContentPrintSite;
use Nemundo\Content\Parameter\ContentParameter;

class PrintActionView extends AbstractActionView
{

    public function getContent()
    {

        $btn = new AdminIconSiteButton($this);
        $btn->site = clone(ContentPrintSite::$site);
        $btn->site->addParameter(new ContentParameter($this->contentId));

        return parent::getContent();

    }

}