<?php

namespace Nemundo\Content\App\Camera\Content\Camera;

use Nemundo\Content\App\Camera\Data\Camera\Camera;
use Nemundo\Content\Builder\IndexBuilder;
use Nemundo\Content\Type\AbstractContentBuilder;
use Nemundo\Core\File\File;
use Nemundo\Core\Image\Exif\Exif;
use Nemundo\Core\Image\ImageFile;
use Nemundo\Model\Data\Property\File\FileProperty;

class CameraBuilder extends AbstractContentBuilder
{

    /**
     * @var FileProperty
     */
    public $image;

    protected function loadBuilder()
    {
        $this->contentType=new CameraType();
        $this->image=new FileProperty();
        // TODO: Implement loadBuilder() method.
    }


    protected function onCreate()
    {


        $data = new Camera();
        $data->image->fromFileProperty($this->image);  // Filename($filename);
$this->dataId= $data->save();


        //$filename = $this->getTmpFilename($fileRequest->filenameExtension);
        //$fileRequest->saveFile($filename);

        $dataRow = (new CameraItem($this->dataId))->getDataRow();


        $filename=$dataRow->image->getFullFilename();

        $exif = new Exif($filename);

        //(new Debug())->write($exif->dateTime);
        //exit;

        $image = new ImageFile($filename);

        $data = new Camera();
        $data->image->fromFilename($filename);
        $data->camera = $exif->camera;

        if ($exif->hasDateTime) {
            $data->dateTime = $exif->dateTime;
            $data->date = $exif->dateTime->getDate();
            $data->year = $exif->dateTime->getYear();
        }

        $data->hasGeoCoordinate=false;
        if ($exif->hasCoordinate()) {
            $data->hasGeoCoordinate=true;
            $data->geoCoordinate=$exif->geoCoordinate;
        }

        $data->width = $image->width;
        $data->height = $image->height;
        $data->filesize = $image->getFileSize();
        $dataId = $data->save();

        $cameraType = new CameraType($dataId);

        //(new ContentIndexAction())->onAction($cameraType);

        //(new IndexBuilder())->buildIndex($cameraType);

        /*
        if ($exif->hasCoordinate()) {
            $geoAction=new GeoIndexAction();
            $geoAction->onAction($cameraType);
        }*/


        //(new File($filename))->deleteFile();

    }


}