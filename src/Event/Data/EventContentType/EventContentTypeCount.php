<?php
namespace Nemundo\Content\App\Event\Data\EventContentType;
class EventContentTypeCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var EventContentTypeModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EventContentTypeModel();
}
}