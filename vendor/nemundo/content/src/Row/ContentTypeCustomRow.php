<?phpnamespace Nemundo\Content\Row;use Nemundo\Content\Data\ContentType\ContentTypeRow;use Nemundo\Content\Index\Tree\Type\TreeIndexTrait;use Nemundo\Content\Type\AbstractContentType;use Nemundo\Content\Type\JsonContentTrait;use Nemundo\Core\Log\LogMessage;class ContentTypeCustomRow extends ContentTypeRow{    public function getContentType()    {        $className = $this->phpClass;        /** @var AbstractContentType $contentType */        $contentType = null;        if ($className !== null) {            if (class_exists($className)) {                /** @var AbstractContentType|TreeIndexTrait|JsonContentTrait $contentType */                $contentType = new $className();            } else {                (new LogMessage())->writeError('Content Type is not registred. Class: ' . $className);            }        } else {            (new LogMessage())->writeError('Content Type Class is Null');        }        return $contentType;    }}