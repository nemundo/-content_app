<?php
namespace Nemundo\Content\App\Html\Data\IframeWidget;
class IframeWidgetPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
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
$row = new IframeWidgetRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}