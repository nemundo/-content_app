<?php
namespace Nemundo\Content\App\Event\Data\EventContentType;
class EventContentTypeReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var EventContentTypeModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EventContentTypeModel();
}
/**
* @return EventContentTypeRow[]
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
* @return EventContentTypeRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return EventContentTypeRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new EventContentTypeRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}