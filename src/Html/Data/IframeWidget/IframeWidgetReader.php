<?php
namespace Nemundo\Content\App\Html\Data\IframeWidget;
class IframeWidgetReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var IframeWidgetModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new IframeWidgetModel();
}
/**
* @return IframeWidgetRow[]
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
* @return IframeWidgetRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return IframeWidgetRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new IframeWidgetRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}