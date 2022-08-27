<?php
namespace Nemundo\Content\App\Event\Data\EventWidget;
class EventWidgetCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var EventWidgetModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EventWidgetModel();
}
}