<?php
namespace Nemundo\Content\App\Stream\Data\StreamContentType;
class StreamContentTypeModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\External\Id\UniqueIdExternalIdType
*/
public $contentTypeId;

/**
* @var \Nemundo\Content\Data\ContentType\ContentTypeExternalType
*/
public $contentType;

protected function loadModel() {
$this->tableName = "stream_stream_content_type";
$this->aliasTableName = "stream_stream_content_type";
$this->label = "Stream Content Type";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "stream_stream_content_type";
$this->id->externalTableName = "stream_stream_content_type";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "stream_stream_content_type_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->contentTypeId = new \Nemundo\Model\Type\External\Id\UniqueIdExternalIdType($this);
$this->contentTypeId->tableName = "stream_stream_content_type";
$this->contentTypeId->fieldName = "content_type";
$this->contentTypeId->aliasFieldName = "stream_stream_content_type_content_type";
$this->contentTypeId->label = "Content Type";
$this->contentTypeId->allowNullValue = false;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "content_type";
$index->addType($this->contentTypeId);

}
public function loadContentType() {
if ($this->contentType == null) {
$this->contentType = new \Nemundo\Content\Data\ContentType\ContentTypeExternalType($this, "stream_stream_content_type_content_type");
$this->contentType->tableName = "stream_stream_content_type";
$this->contentType->fieldName = "content_type";
$this->contentType->aliasFieldName = "stream_stream_content_type_content_type";
$this->contentType->label = "Content Type";
}
return $this;
}
}