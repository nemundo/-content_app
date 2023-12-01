<?php
namespace Nemundo\App\Mail\Data\MailQueue;
class MailQueue extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var MailQueueModel
*/
protected $model;

/**
* @var bool
*/
public $send;

/**
* @var \Nemundo\Core\Type\DateTime\DateTime
*/
public $dateTimeSend;

/**
* @var string
*/
public $mailTo;

/**
* @var string
*/
public $subject;

/**
* @var string
*/
public $text;

public function __construct() {
parent::__construct();
$this->model = new MailQueueModel();
$this->dateTimeSend = new \Nemundo\Core\Type\DateTime\DateTime();
}
public function save() {
$this->typeValueList->setModelValue($this->model->send, $this->send);
if ($this-> dateTimeSend->hasValue()) {
$property = new \Nemundo\Model\Data\Property\DateTime\DateTimeDataProperty($this->model->dateTimeSend, $this->typeValueList);
$property->setValue($this->dateTimeSend);
}
$this->typeValueList->setModelValue($this->model->mailTo, $this->mailTo);
$this->typeValueList->setModelValue($this->model->subject, $this->subject);
$this->typeValueList->setModelValue($this->model->text, $this->text);
$id = parent::save();
return $id;
}
}