<?php
namespace Nemundo\Content\App\Html\Data\ImgProperty;
class ImgPropertyReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var ImgPropertyModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new ImgPropertyModel();
}
/**
* @return ImgPropertyRow[]
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
* @return ImgPropertyRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return ImgPropertyRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new ImgPropertyRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}