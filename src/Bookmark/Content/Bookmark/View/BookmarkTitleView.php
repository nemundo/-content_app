<?php

namespace Nemundo\Content\App\Bookmark\Content\Bookmark\View;

use Nemundo\Admin\Com\Image\AdminImage;
use Nemundo\Com\Html\Hyperlink\UrlHyperlink;
use Nemundo\Content\App\Bookmark\Content\Bookmark\BookmarkItem;
use Nemundo\Content\View\AbstractContentView;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Heading\H3;
use Nemundo\Html\Paragraph\Paragraph;

class BookmarkTitleView extends AbstractContentView
{
    protected function loadView()
    {
        $this->viewName = 'title-only';
        $this->viewId = 'b7b1a95c-dfe1-4f24-b520-b24b6566ecd7';
        //$this->defaultView = true;
    }

    public function getContent()
    {

        $bookmarkRow = (new BookmarkItem($this->dataId))->getDataRow();

        $hyperlink = new UrlHyperlink($this);
        $hyperlink->openNewWindow = true;
        $hyperlink->url = $bookmarkRow->url;
        $hyperlink->content= $bookmarkRow->title;

        return parent::getContent();
    }
}