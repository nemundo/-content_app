<?php
namespace Nemundo\Content\App\Stream\Data\StreamContentType;
use Nemundo\Model\Data\AbstractModelUpdate;
class StreamContentTypeUpdate extends AbstractModelUpdate {
/**
* @var StreamContentTypeModel
*/
public $model;

/**
* @var string
*/
public $contentTypeId;

public function __construct() {
parent::__construct();
$this->model = new StreamContentTypeModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->contentTypeId, $this->contentTypeId);
parent::update();
}
}