<?php

namespace Nemundo\Content\App\Bookmark\Content\Bookmark\View;

use Nemundo\Admin\Com\Image\AdminImage;
use Nemundo\Com\Html\Hyperlink\UrlHyperlink;
use Nemundo\Content\App\Bookmark\Content\Bookmark\BookmarkItem;
use Nemundo\Content\View\AbstractContentView;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Heading\H3;
use Nemundo\Html\Paragraph\Paragraph;

class BookmarkView extends AbstractContentView
{
    protected function loadView()
    {
        $this->viewName = 'mit Bild';
        $this->viewId = 'b907df53-1cc7-4865-ba02-6d408fb6619d';
        $this->defaultView = true;
    }


    public function getContent()
    {

        $bookmarkRow = (new BookmarkItem($this->dataId))->getDataRow();

        $hyperlink = new UrlHyperlink($this);
        $hyperlink->openNewWindow = true;
        $hyperlink->url = $bookmarkRow->url;

        $h2 = new H3($hyperlink);
        $h2->content = $bookmarkRow->title;

        if ($bookmarkRow->image->hasValue()) {

            $div = new Div($hyperlink);

            $img = new AdminImage($div);
            $img->src = $bookmarkRow->image->getImageUrl($bookmarkRow->model->imageAutoSize800);

        }

        $p = new Paragraph($this);
        $p->content = $bookmarkRow->description;


        return parent::getContent();
    }

}