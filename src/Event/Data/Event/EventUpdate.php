<?php
namespace Nemundo\Content\App\Event\Data\Event;
use Nemundo\Model\Data\AbstractModelUpdate;
class EventUpdate extends AbstractModelUpdate {
/**
* @var EventModel
*/
public $model;

/**
* @var string
*/
public $event;

/**
* @var \Nemundo\Core\Type\DateTime\DateTime
*/
public $dateTime;

/**
* @var string
*/
public $description;

public function __construct() {
parent::__construct();
$this->model = new EventModel();
$this->dateTime = new \Nemundo\Core\Type\DateTime\DateTime();
}
public function update() {
$this->typeValueList->setModelValue($this->model->event, $this->event);
if ($this-> dateTime->hasValue()) {
$property = new \Nemundo\Model\Data\Property\DateTime\DateTimeDataProperty($this->model->dateTime, $this->typeValueList);
$property->setValue($this->dateTime);
}
$this->typeValueList->setModelValue($this->model->description, $this->description);
parent::update();
}
}