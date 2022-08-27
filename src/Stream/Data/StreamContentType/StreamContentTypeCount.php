<?php
namespace Nemundo\Content\App\Stream\Data\StreamContentType;
class StreamContentTypeCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var StreamContentTypeModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new StreamContentTypeModel();
}
}