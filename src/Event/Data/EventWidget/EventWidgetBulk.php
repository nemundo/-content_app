<?php
namespace Nemundo\Content\App\Event\Data\EventWidget;
class EventWidgetBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var EventWidgetModel
*/
protected $model;

public function __construct() {
parent::__construct();
$this->model = new EventWidgetModel();
}
public function save() {
$id = parent::save();
return $id;
}
}