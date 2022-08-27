<?php
namespace Nemundo\Content\App\Event\Data\EventContentType;
class EventContentType extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var EventContentTypeModel
*/
protected $model;

/**
* @var string
*/
public $contentTypeId;

public function __construct() {
parent::__construct();
$this->model = new EventContentTypeModel();
}
public function save() {
$this->typeValueList->setModelValue($this->model->contentTypeId, $this->contentTypeId);
$id = parent::save();
return $id;
}
}