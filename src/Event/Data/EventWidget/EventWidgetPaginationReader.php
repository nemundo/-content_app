<?php
namespace Nemundo\Content\App\Event\Data\EventWidget;
class EventWidgetPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
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
$row = new EventWidgetRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}