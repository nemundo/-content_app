<?php
namespace Nemundo\Content\App\Contact\Data\Email;
class EmailReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var EmailModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EmailModel();
}
/**
* @return EmailRow[]
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
* @return EmailRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return EmailRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new EmailRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}