<?php
namespace Nemundo\Content\App\Event\Data\EventWidget;
class EventWidgetModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

protected function loadModel() {
$this->tableName = "event_event_widget";
$this->aliasTableName = "event_event_widget";
$this->label = "Event Widget";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "event_event_widget";
$this->id->externalTableName = "event_event_widget";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "event_event_widget_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

}
}