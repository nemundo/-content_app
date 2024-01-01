<?php

namespace Nemundo\Content\App\File\Content\Video;

use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Admin\Com\Table\AdminTableHeader;
use Nemundo\Admin\Com\Table\Row\AdminTableRow;
use Nemundo\Content\App\File\Data\Video\VideoReader;
use Nemundo\Content\View\AbstractContentAdmin;

class VideoAdmin extends AbstractContentAdmin
{

    protected function onIndex()
    {

        $table = new AdminTable($this);

        $reader = new VideoReader();

        (new AdminTableHeader($table))
            ->addText($reader->model->video->label);

        //    ->addEmpty();

        foreach ($reader->getData() as $videoRow) {

            (new AdminTableRow($table))
                ->addSite($this->getViewSite($videoRow->id, $videoRow->orginalFilename));


        }

    }

}