<?phpnamespace Nemundo\Core\Json\Document;use Nemundo\Core\Base\Document\AbstractDocument;use Nemundo\Core\Http\Response\HttpResponse;use Nemundo\Core\Http\Response\ResponseType;use Nemundo\Core\Json\JsonText;use Nemundo\Core\TextFile\Writer\TextFileWriter;abstract class AbstractJsonDocument extends AbstractDocument{    /**     * @var bool     */    public $formatJson = true;    protected $data = [];    public function addRow($row)    {        $this->data[] = $row;    }    // brauchts es das    public function setData($data)    {        $this->data = $data;    }    protected function getContent()    {        $data = new JsonText();        $data->formatJson = $this->formatJson;        $data->addData($this->data);        $content = $data->getJson();        return $content;    }    protected function onWrite($fullFilename)    {        $json = new TextFileWriter($fullFilename);        $json->overwriteExistingFile = $this->overwriteExistingFile;        $json->addLine($this->getContent());        $json->writeFile();        return $this;    }    protected function onRender()    {        $response = new HttpResponse();        $response->contentType = ResponseType::JSON;        $response->content = $this->getContent();        $response->attachmentFilename = $this->filename;        $response->sendResponse();    }}