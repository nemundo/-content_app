<?php
namespace Nemundo\Content\App\Event\Data\EventWidget;
use Nemundo\Model\Data\AbstractModelUpdate;
class EventWidgetUpdate extends AbstractModelUpdate {
/**
* @var EventWidgetModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EventWidgetModel();
}
public function update() {
parent::update();
}
}