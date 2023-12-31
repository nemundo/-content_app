<?php

namespace Nemundo\Content\App\Camera\Content\Camera;

use Nemundo\Content\App\Camera\Data\Camera\CameraDelete;
use Nemundo\Content\App\Camera\Data\Camera\CameraReader;
use Nemundo\Content\App\Camera\Data\Camera\CameraRow;
use Nemundo\Content\Index\Calendar\DateTimeIndexTrait;
use Nemundo\Content\Index\Download\DownloadIndexTrait;
use Nemundo\Content\Index\File\ImageIndexTrait;
use Nemundo\Content\Index\Geo\Type\GeoIndexTrait;
use Nemundo\Content\Type\AbstractContentItem;
use Nemundo\Content\Type\WebServiceTrait;

class CameraItem extends AbstractContentItem
{

    use DateTimeIndexTrait;
    use WebServiceTrait;
    //use JsonContentTrait;
    use GeoIndexTrait;
use ImageIndexTrait;
use DownloadIndexTrait;


    protected function loadItem()
    {
        $this->contentType=new CameraType();
        // TODO: Implement loadItem() method.
    }



    protected function onDelete()
    {
        (new CameraDelete())->deleteById($this->dataId);
    }


    protected function onDataRow()
    {
        $this->dataRow = (new CameraReader())->getRowById($this->dataId);
    }

    /**
     * @return \Nemundo\Model\Row\AbstractModelDataRow|CameraRow
     */
    public function getDataRow()
    {
        return parent::getDataRow();
    }


    public function getData()
    {

        $cameraRow = $this->getDataRow();

        $data = [];
        $data['camera'] = $cameraRow->camera;
        $data['filename'] = $cameraRow->image->getFilename();
        $data['image_url'] = $cameraRow->image->getImageUrl($cameraRow->model->imageAutoSize1200);

        return $data;

    }


    public function getSubject()
    {

        $subject = $this->getDataRow()->dateTime->getLongFormat();
        return $subject;

    }


    public function getDate()
    {
        return $this->getDataRow()->dateTime->getDate();
    }


    public function getDateTime()
    {
        return $this->getDataRow()->dateTime;
    }


    protected function getImageFilename()
    {
        return $this->getDataRow()->image->getFullFilename();
    }


    public function getGeoCoordinate()
    {
        return $this->getDataRow()->geoCoordinate;
    }


    public function getDownloadUrl()
    {

        return $this->getDataRow()->image->getUrl();

        // TODO: Implement getDownloadUrl() method.
    }


}