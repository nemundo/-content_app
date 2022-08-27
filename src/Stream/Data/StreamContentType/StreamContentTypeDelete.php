<?php
namespace Nemundo\Content\App\Stream\Data\StreamContentType;
class StreamContentTypeDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var StreamContentTypeModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new StreamContentTypeModel();
}
}