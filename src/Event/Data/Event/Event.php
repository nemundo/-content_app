<?php
namespace Nemundo\Content\App\Event\Data\Event;
class Event extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var EventModel
*/
protected $model;

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
public function save() {
$this->typeValueList->setModelValue($this->model->event, $this->event);
if ($this-> dateTime->hasValue()) {
$property = new \Nemundo\Model\Data\Property\DateTime\DateTimeDataProperty($this->model->dateTime, $this->typeValueList);
$property->setValue($this->dateTime);
}
$this->typeValueList->setModelValue($this->model->description, $this->description);
$id = parent::save();
return $id;
}
}