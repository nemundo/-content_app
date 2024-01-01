<?php

namespace Nemundo\Content\App\File\Content\Audio;

use Nemundo\Admin\Com\Image\AdminImage;
use Nemundo\Admin\Com\Layout\Flex\AdminRowFlexLayout;
use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Admin\Com\Table\AdminTableHeader;
use Nemundo\Admin\Com\Table\Row\AdminTableRow;
use Nemundo\Content\App\File\Data\Audio\AudioReader;
use Nemundo\Content\App\File\Data\Image\ImageReader;
use Nemundo\Content\View\AbstractContentAdmin;

class AudioAdmin extends AbstractContentAdmin
{

    protected function onIndex()
    {

        $table = new AdminTable($this);

        $reader = new AudioReader();

        (new AdminTableHeader($table))
            ->addText($reader->model->audio->label);

        //    ->addEmpty();

        foreach ($reader->getData() as $audioRow) {

            (new AdminTableRow($table))
                ->addSite( $this->getViewSite($audioRow->id,$audioRow->orginalFilename));



        }

    }

}