<?php

namespace Nemundo\Content\App\Html\Content\Img;

use Nemundo\Content\Type\AbstractContentType;

class ImgType extends AbstractContentType
{
    protected function loadContentType()
    {

        $this->typeLabel = 'Img (Responsive Image)';
        $this->typeId = 'ce3864ee-0dc8-420d-be85-8b5b8c27ded0';
        $this->formClassList[] = ImgForm::class;
        $this->viewClassList[] = ImgView::class;
        $this->itemClass = ImgItem::class;
    }
}