<?php
namespace Nemundo\Content\App\Event\Data\EventContentType;
class EventContentTypeModel extends \Nemundo\Model\Definition\Model\AbstractModel {
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
$this->tableName = "event_event_content_type";
$this->aliasTableName = "event_event_content_type";
$this->label = "Event Content Type";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "event_event_content_type";
$this->id->externalTableName = "event_event_content_type";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "event_event_content_type_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->contentTypeId = new \Nemundo\Model\Type\External\Id\UniqueIdExternalIdType($this);
$this->contentTypeId->tableName = "event_event_content_type";
$this->contentTypeId->fieldName = "content_type";
$this->contentTypeId->aliasFieldName = "event_event_content_type_content_type";
$this->contentTypeId->label = "Content Type";
$this->contentTypeId->allowNullValue = false;

}
public function loadContentType() {
if ($this->contentType == null) {
$this->contentType = new \Nemundo\Content\Data\ContentType\ContentTypeExternalType($this, "event_event_content_type_content_type");
$this->contentType->tableName = "event_event_content_type";
$this->contentType->fieldName = "content_type";
$this->contentType->aliasFieldName = "event_event_content_type_content_type";
$this->contentType->label = "Content Type";
}
return $this;
}
}