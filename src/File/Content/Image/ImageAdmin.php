<?php

namespace Nemundo\Content\App\File\Content\Image;

use Nemundo\Admin\Com\Image\AdminImage;
use Nemundo\Admin\Com\Layout\Flex\AdminRowFlexLayout;
use Nemundo\Content\App\File\Data\Image\ImageReader;
use Nemundo\Content\View\AbstractContentAdmin;

class ImageAdmin extends AbstractContentAdmin
{

    protected function onIndex()
    {

        $layout = new AdminRowFlexLayout($this);

        $reader = new ImageReader();
        foreach ($reader->getData() as $imageRow) {

            $img = new AdminImage($layout);
            $img->src=$imageRow->image->getImageUrl($imageRow->model->imageAutoSize400);

        }

    }

}