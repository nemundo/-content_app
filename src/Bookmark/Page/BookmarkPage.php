<?php

namespace Nemundo\Content\App\Bookmark\Page;

use Nemundo\Admin\Com\Layout\AdminFlexboxLayout;
use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Admin\Com\Table\AdminTableHeader;
use Nemundo\Admin\Com\Table\Row\AdminTableRow;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Content\App\Bookmark\Content\Bookmark\Form\BookmarkForm;
use Nemundo\Content\App\Bookmark\Data\Bookmark\BookmarkPaginationReader;

class BookmarkPage extends AbstractTemplateDocument
{
    public function getContent()
    {

        $layout = new AdminFlexboxLayout($this);


        new BookmarkForm($layout);


        $table = new AdminTable($layout);


        $reader = new BookmarkPaginationReader();

        (new AdminTableHeader($table))
            ->addText($reader->model->title->label)
            ->addText($reader->model->description->label)
            ->addText($reader->model->url->label);


        foreach ($reader->getData() as $bookmarkRow) {

            (new AdminTableRow($table))
                ->addText($bookmarkRow->title)
                ->addText($bookmarkRow->description)
                ->addText($bookmarkRow->url);

        }


        return parent::getContent();
    }
}