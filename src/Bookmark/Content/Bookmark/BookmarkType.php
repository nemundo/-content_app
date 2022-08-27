<?php

namespace Nemundo\Content\App\Bookmark\Content\Bookmark;

use Nemundo\Content\App\Bookmark\Content\Bookmark\Form\BookmarkForm;
use Nemundo\Content\App\Bookmark\Content\Bookmark\Form\BookmarkSearchForm;
use Nemundo\Content\App\Bookmark\Content\Bookmark\View\BookmarkTitleView;
use Nemundo\Content\App\Bookmark\Content\Bookmark\View\BookmarkView;
use Nemundo\Content\Type\AbstractContentType;

class BookmarkType extends AbstractContentType
{
    protected function loadContentType()
    {
        $this->typeLabel = 'Url (Bookmark)';
        $this->typeId = 'dcf84de5-f95a-420d-9b1a-0d4b73e2f2ac';
        $this->formClassList[] = BookmarkForm::class;
        $this->formClassList[] = BookmarkSearchForm::class;
        $this->viewClassList[] = BookmarkView::class;
        $this->viewClassList[] = BookmarkTitleView::class;
        $this->itemClass = BookmarkItem::class;

    }
}