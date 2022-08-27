<?php
namespace Nemundo\Content\App\Event\Data\EventWidget;
class EventWidgetValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var EventWidgetModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EventWidgetModel();
}
}