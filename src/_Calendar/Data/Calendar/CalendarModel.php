<?php
namespace Nemundo\Content\App\Calendar\Data\Calendar;
class CalendarModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\DateTime\DateType
*/
public $date;

/**
* @var \Nemundo\Model\Type\DateTime\TimeType
*/
public $time;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $event;

/**
* @var \Nemundo\Model\Type\External\Id\NumberExternalIdType
*/
public $contentId;

/**
* @var \Nemundo\Content\Data\Content\ContentExternalType
*/
public $content;

protected function loadModel() {
$this->tableName = "calendar_calendar";
$this->aliasTableName = "calendar_calendar";
$this->label = "Calendar";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "calendar_calendar";
$this->id->externalTableName = "calendar_calendar";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "calendar_calendar_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->date = new \Nemundo\Model\Type\DateTime\DateType($this);
$this->date->tableName = "calendar_calendar";
$this->date->externalTableName = "calendar_calendar";
$this->date->fieldName = "date";
$this->date->aliasFieldName = "calendar_calendar_date";
$this->date->label = "Date";
$this->date->allowNullValue = true;

$this->time = new \Nemundo\Model\Type\DateTime\TimeType($this);
$this->time->tableName = "calendar_calendar";
$this->time->externalTableName = "calendar_calendar";
$this->time->fieldName = "time";
$this->time->aliasFieldName = "calendar_calendar_time";
$this->time->label = "Time";
$this->time->allowNullValue = true;

$this->event = new \Nemundo\Model\Type\Text\TextType($this);
$this->event->tableName = "calendar_calendar";
$this->event->externalTableName = "calendar_calendar";
$this->event->fieldName = "event";
$this->event->aliasFieldName = "calendar_calendar_event";
$this->event->label = "Event";
$this->event->allowNullValue = true;
$this->event->length = 255;

$this->contentId = new \Nemundo\Model\Type\External\Id\NumberExternalIdType($this);
$this->contentId->tableName = "calendar_calendar";
$this->contentId->fieldName = "content";
$this->contentId->aliasFieldName = "calendar_calendar_content";
$this->contentId->label = "Content";
$this->contentId->allowNullValue = false;

}
public function loadContent() {
if ($this->content == null) {
$this->content = new \Nemundo\Content\Data\Content\ContentExternalType($this, "calendar_calendar_content");
$this->content->tableName = "calendar_calendar";
$this->content->fieldName = "content";
$this->content->aliasFieldName = "calendar_calendar_content";
$this->content->label = "Content";
}
return $this;
}
}