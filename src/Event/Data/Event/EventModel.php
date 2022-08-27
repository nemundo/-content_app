<?php
namespace Nemundo\Content\App\Event\Data\Event;
class EventModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $event;

/**
* @var \Nemundo\Model\Type\DateTime\DateTimeType
*/
public $dateTime;

/**
* @var \Nemundo\Model\Type\Text\LargeTextType
*/
public $description;

protected function loadModel() {
$this->tableName = "event_event";
$this->aliasTableName = "event_event";
$this->label = "Event";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "event_event";
$this->id->externalTableName = "event_event";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "event_event_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->event = new \Nemundo\Model\Type\Text\TextType($this);
$this->event->tableName = "event_event";
$this->event->externalTableName = "event_event";
$this->event->fieldName = "event";
$this->event->aliasFieldName = "event_event_event";
$this->event->label = "Event";
$this->event->allowNullValue = false;
$this->event->length = 255;

$this->dateTime = new \Nemundo\Model\Type\DateTime\DateTimeType($this);
$this->dateTime->tableName = "event_event";
$this->dateTime->externalTableName = "event_event";
$this->dateTime->fieldName = "date_time";
$this->dateTime->aliasFieldName = "event_event_date_time";
$this->dateTime->label = "Date Time";
$this->dateTime->allowNullValue = false;

$this->description = new \Nemundo\Model\Type\Text\LargeTextType($this);
$this->description->tableName = "event_event";
$this->description->externalTableName = "event_event";
$this->description->fieldName = "description";
$this->description->aliasFieldName = "event_event_description";
$this->description->label = "Description";
$this->description->allowNullValue = false;

}
}