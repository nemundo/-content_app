<?phpnamespace Nemundo\Model\Data\Property\File;use Nemundo\Core\Debug\Debug;use Nemundo\Core\File\File;use Nemundo\Core\File\FileCopy;use Nemundo\Core\Http\Request\File\AbstractFileRequest;use Nemundo\Core\Image\Format\AutoSizeImageFormat;use Nemundo\Core\Image\Format\FixHeightImageFormat;use Nemundo\Core\Image\Format\FixWidthImageFormat;use Nemundo\Core\Image\ImageFile;use Nemundo\Core\Image\Resize\ImageResize;use Nemundo\Core\Image\Manipulation\ImageRotation;use Nemundo\Core\Path\Path;use Nemundo\Model\Type\File\ImageType;use Nemundo\Model\Type\ImageFormat\AutoSizeModelImageFormat;use Nemundo\Model\Type\ImageFormat\FixHeightModelImageFormat;use Nemundo\Model\Type\ImageFormat\FixWidthModelModelImageFormat;use Nemundo\Project\Path\TmpPath;class ImageDataProperty extends FileDataProperty{    /**     * @var ImageType     */    public $type;    public function fromFilename($filename)    {        $fullFilename = parent::fromFilename($filename);        $this->resizeImage($fullFilename);    }    public function fromUrl($url, $filenameExtension = null)    {        $fullFilename = parent::fromUrl($url, $filenameExtension);        $this->resizeImage($fullFilename);    }    public function fromFileRequest(AbstractFileRequest $fileRequest)    {        $fullFilename = parent::fromFileRequest($fileRequest);        $this->resizeImage($fullFilename);    }    private function resizeImage($uniqueFilename)    {        //(new Debug())->write('resize image 1');        /*$file = new File($uniqueFilename);        if (($file->getFileExtension() == 'heic') || ($file->getFileExtension() == 'heif') ||($file->getFileExtension() == 'tif') || ($file->getFileExtension() == 'tiff')) {            $tmpFilename = (new TmpPath())                ->addPath($file->getFilenameWithoutFileExtension().'.png')                //->addPath('model_resize.png')                ->getFullFilename();            $image = new \Imagick($uniqueFilename);            $image->setImageFormat('png');            $image->writeImage($tmpFilename);            $uniqueFilename = $tmpFilename;        }*/        /*(new Debug())->write('resize image 2');        (new Debug())->write($uniqueFilename);        exit;*/        $imageRotation = new ImageRotation($uniqueFilename);        $imageRotation->autoRotateImage();        foreach ($this->type->getFormatList() as $resizeFormat) {            $destinationFilename = (new Path())                ->addPath($this->type->getDataPath())                ->addPath($resizeFormat->getPath())                ->addPath(basename($uniqueFilename))                ->getFilename();            $format = null;            if ($resizeFormat->isObjectOfClass(AutoSizeModelImageFormat::class)) {                $format = new AutoSizeImageFormat();                $format->size = $resizeFormat->size;            }            if ($resizeFormat->isObjectOfClass(FixWidthModelModelImageFormat::class)) {                $format = new FixWidthImageFormat();                $format->width = $resizeFormat->width;            }            if ($resizeFormat->isObjectOfClass(FixHeightModelImageFormat::class)) {                $format = new FixHeightImageFormat();                $format->height = $resizeFormat->height;            }            $image = new ImageFile($uniqueFilename);            switch ($image->imageType) {                case 'jpg':                case 'jpeg':                case 'png':                case 'gif':                    $imageResize = new ImageResize();                    $imageResize->sourceFilename = $uniqueFilename;                    $imageResize->destinationFilename = $destinationFilename;                    $imageResize->format = $format;                    $imageResize->resizeImage();                    break;                default:                    $copy = new FileCopy();                    $copy->sourceFilename = $uniqueFilename;                    $copy->destinationFilename = $destinationFilename;                    $copy->copyFile();                    break;            }        }    }}