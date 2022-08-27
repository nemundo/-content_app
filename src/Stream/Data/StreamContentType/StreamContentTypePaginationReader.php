<?php
namespace Nemundo\Content\App\Stream\Data\StreamContentType;
class StreamContentTypePaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var StreamContentTypeModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new StreamContentTypeModel();
}
/**
* @return StreamContentTypeRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new StreamContentTypeRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}