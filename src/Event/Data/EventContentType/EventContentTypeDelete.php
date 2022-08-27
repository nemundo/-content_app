<?php
namespace Nemundo\Content\App\Event\Data\EventContentType;
class EventContentTypeDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var EventContentTypeModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EventContentTypeModel();
}
}