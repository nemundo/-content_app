<?php

namespace Nemundo\Content\App\Bookmark\Site;

use Nemundo\Content\App\Bookmark\Page\BookmarkPage;
use Nemundo\Web\Site\AbstractSite;

class BookmarkSite extends AbstractSite
{
    protected function loadSite()
    {
        $this->title = 'Bookmark';
        $this->url = 'bookmark';
    }

    public function loadContent()
    {
        (new BookmarkPage())->render();
    }
}