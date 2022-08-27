<?php
namespace Nemundo\Content\App\Event\Data\EventContentType;
class EventContentTypeValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var EventContentTypeModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EventContentTypeModel();
}
}