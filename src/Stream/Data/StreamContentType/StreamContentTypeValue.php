<?php
namespace Nemundo\Content\App\Stream\Data\StreamContentType;
class StreamContentTypeValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var StreamContentTypeModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new StreamContentTypeModel();
}
}