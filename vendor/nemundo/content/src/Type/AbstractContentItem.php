<?phpnamespace Nemundo\Content\Type;use Nemundo\Content\Builder\IndexBuilder;use Nemundo\Core\Base\AbstractBaseClass;use Nemundo\Core\Language\Translation;use Nemundo\Model\Row\AbstractModelDataRow;abstract class AbstractContentItem extends AbstractBaseClass{    use ContentIndexTrait;    use JsonContentTrait;    /**     * @var AbstractContentType     */    public $contentType;    /**     * @var string     */    protected $dataId;    /**     * @var AbstractModelDataRow     */    protected $dataRow;    abstract protected function loadItem();    //public function __construct($dataId)    public function __construct($dataId = null)    {        $this->dataId = $dataId;        $this->loadItem();    }    public function getDataId()    {        return $this->dataId;    }    public function getSubject()    {        $subject = '[No Content Type]';        if ($this->contentType->typeLabel !== null) {            $subject = (new Translation())->getText($this->contentType->typeLabel);        }        return $subject;    }    public function getText()    {        $text = '';        return $text;    }/*    protected function onDeleteItem()    {    }    public function deleteItem()    {        (new IndexBuilder())->deleteIndex($this);        $this->onDeleteItem();    }*/    protected function onDataRow()    {        //(new LogMessage())->writeError('getDataRow not defined'.$this->getClassName());    }    public function getDataRow()    {        if ($this->dataRow == null) {            $this->onDataRow();        }        return $this->dataRow;    }    public function hasIndex($className) {        return $this->isObjectOfTrait($className);    }}