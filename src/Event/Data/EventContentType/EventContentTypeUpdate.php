<?php
namespace Nemundo\Content\App\Event\Data\EventContentType;
use Nemundo\Model\Data\AbstractModelUpdate;
class EventContentTypeUpdate extends AbstractModelUpdate {
/**
* @var EventContentTypeModel
*/
public $model;

/**
* @var string
*/
public $contentTypeId;

public function __construct() {
parent::__construct();
$this->model = new EventContentTypeModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->contentTypeId, $this->contentTypeId);
parent::update();
}
}