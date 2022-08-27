<?php

namespace Nemundo\Content\App\Download\Action;

use Nemundo\Admin\Com\Button\AdminIconSiteButton;
use Nemundo\Admin\Com\Icon\AdminIcon;
use Nemundo\Com\Html\Hyperlink\UrlHyperlink;
use Nemundo\Content\Action\AbstractActionView;
use Nemundo\Content\Builder\ContentBuilder;
use Nemundo\Content\Index\Download\DownloadIndexTrait;
use Nemundo\Content\Type\AbstractContentItem;

class DownloadActionView extends AbstractActionView
{

    public function getContent()
    {

        /** @var AbstractContentItem|DownloadIndexTrait $item */
        $item = (new ContentBuilder($this->contentId))->getContentItem();

        if ($item->isObjectOfTrait(DownloadIndexTrait::class)) {

            $hyperlink = new UrlHyperlink($this);
            $hyperlink->download = true;
            $hyperlink->title = 'Download';
            $hyperlink->url = $item->getDownloadUrl();

            $icon=new AdminIcon($hyperlink);
            $icon->icon='download';

        }

        return parent::getContent();

    }

}