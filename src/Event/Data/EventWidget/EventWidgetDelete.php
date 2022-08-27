<?php
namespace Nemundo\Content\App\Event\Data\EventWidget;
class EventWidgetDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var EventWidgetModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EventWidgetModel();
}
}