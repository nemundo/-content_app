<?phpnamespace Nemundo\Model\Data\Property\File;use Nemundo\Core\File\File;use Nemundo\Core\File\UniqueFilename;use Nemundo\Core\Http\Request\File\AbstractFileRequest;use Nemundo\Core\Log\LogMessage;use Nemundo\Core\WebRequest\CurlWebRequest;use Nemundo\Core\WebRequest\WebHeader;use Nemundo\Model\Type\File\AbstractFileType;class FileDataProperty extends AbstractFileDataProperty{    /**     * @var AbstractFileType     */    protected $type;    public function fromFilename($filename)    {        $fullFilename = null;        if ($filename !== null) {            $file = new File($filename);            if ($file->fileExists()) {                $fileExtension = $file->getFileExtension();                $uniqueFilename = (new UniqueFilename())->getUniqueFilename($fileExtension);                if ($this->type->keepOrginalFilename) {                    $uniqueFilename = $file->getFilename();                }                $fullFilename = $this->type->getDataPath() . $uniqueFilename;                $file->saveAs($fullFilename);                $this->typeValueList->setModelValue($this->type, $uniqueFilename);            } else {                (new LogMessage())->writeError('File existiert nicht. ' . $filename);            }        }        return $fullFilename;    }    public function fromUrl($url, $filenameExtension = null)    {        if ($filenameExtension == null) {            $filenameExtension = (new WebHeader($url))->getContentType();        }        $uniqueFilename = (new UniqueFilename())->getUniqueFilename($filenameExtension);        $fullFilename = $this->type->getDataPath() . $uniqueFilename;        (new CurlWebRequest())->downloadUrl($url, $fullFilename);        $this->typeValueList->setModelValue($this->type, $uniqueFilename);        return $fullFilename;    }    public function fromFileRequest(AbstractFileRequest $fileRequest)    {        $filename = '';        $fullFilename = '';        if ($fileRequest->isDownloadSuccesful()) {            $path = $this->type->getDataPath();            $fullFilename = $fileRequest->saveAsUniqueFilename($path);            $filename = basename($fullFilename);        }        $this->typeValueList->setModelValue($this->type, $filename);        return $fullFilename;    }}