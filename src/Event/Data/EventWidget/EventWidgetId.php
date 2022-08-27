<?php
namespace Nemundo\Content\App\Event\Data\EventWidget;
use Nemundo\Model\Id\AbstractModelIdValue;
class EventWidgetId extends AbstractModelIdValue {
/**
* @var EventWidgetModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EventWidgetModel();
}
}