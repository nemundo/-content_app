<?php

namespace Nemundo\Content\App\ImageGallery\Content\ImageGallery;

use Nemundo\Content\App\ImageGallery\Data\Image\ImageReader;
use Nemundo\Content\App\ImageGallery\Data\ImageGallery\ImageGalleryReader;
use Nemundo\Content\App\ImageGallery\Data\ImageGallery\ImageGalleryRow;
use Nemundo\Content\Type\AbstractContentItem;

class ImageGalleryItem extends AbstractContentItem
{

    protected function loadItem()
    {
        $this->contentType = new ImageGalleryType();
    }


    protected function onDataRow()
    {
        $this->dataRow = (new ImageGalleryReader())->getRowById($this->dataId);
    }


    /**
     * @return \Nemundo\Model\Row\AbstractModelDataRow|ImageGalleryRow
     */
    public function getDataRow()
    {
        return parent::getDataRow();
    }


    public function getDataReader()
    {

        $imageReader = new ImageReader();
        $imageReader->filter->andEqual($imageReader->model->galleryId, $this->dataId);
        $imageReader->addOrder($imageReader->model->itemOrder);
        return $imageReader;

    }


    public function getSubject()
    {
        return $this->getDataRow()->imageGallery;
    }


}