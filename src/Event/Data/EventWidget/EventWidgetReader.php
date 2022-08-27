<?php
namespace Nemundo\Content\App\Event\Data\EventWidget;
class EventWidgetReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var EventWidgetModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EventWidgetModel();
}
/**
* @return EventWidgetRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = $this->getModelRow($dataRow);
$list[] = $row;
}
return $list;
}
/**
* @return EventWidgetRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return EventWidgetRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new EventWidgetRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}