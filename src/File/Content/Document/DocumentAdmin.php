<?php

namespace Nemundo\Content\App\File\Content\Document;

use Nemundo\Admin\Com\Pagination\AdminPagination;
use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Admin\Com\Table\AdminTableHeader;
use Nemundo\Admin\Com\Table\Row\AdminTableRow;
use Nemundo\Content\App\File\Data\Document\DocumentPaginationReader;
use Nemundo\Content\View\AbstractContentAdmin;
use Nemundo\Html\Hyperlink\Hyperlink;

class DocumentAdmin extends AbstractContentAdmin
{


    protected function onIndex()
    {

        $documentReader = new DocumentPaginationReader();

        $table = new AdminTable($this);

        $header = new AdminTableHeader($table);
        $header->addText($documentReader->model->document->label);

        foreach ($documentReader->getData() as $documentRow) {

            $row = new AdminTableRow($table);

            $hyperlink = new Hyperlink($row);
            $hyperlink->content = $documentRow->document->getFilename();
            $hyperlink->href = $documentRow->document->getUrl();

        }

        $pagination = new AdminPagination($this);
        $pagination->paginationReader = $documentReader;

    }

}