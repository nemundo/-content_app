<?php

namespace Nemundo\Core\Image\Resize;

use Nemundo\Core\Image\Type\ImageType;

class ImagickImageResize extends AbstractImageResize
{

    public $imageType = ImageType::JPG;

    public function resizeImage()
    {

        $dimension = $this->getImageDimension();

        $image = new \Imagick($this->sourceFilename);
        $image->resizeImage($dimension->width, $dimension->height, \Imagick::FILTER_LANCZOS, 1);
        $image->setImageFormat($this->imageType);
        $image->writeImage($this->destinationFilename);

    }

}