<?php
namespace Nemundo\Content\App\Event\Data\EventContentType;
class EventContentTypePaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
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
$row = new EventContentTypeRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}