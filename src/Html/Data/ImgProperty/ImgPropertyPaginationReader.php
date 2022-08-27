<?php
namespace Nemundo\Content\App\Html\Data\ImgProperty;
class ImgPropertyPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
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
$row = new ImgPropertyRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}