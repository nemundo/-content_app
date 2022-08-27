<?php
namespace Nemundo\Content\App\Contact\Data\Email;
class EmailPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
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
$row = new EmailRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}