<?php
namespace Nemundo\Content\App\Contact\Data\Email;
class EmailBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var EmailModel
*/
protected $model;

/**
* @var string
*/
public $email;

public function __construct() {
parent::__construct();
$this->model = new EmailModel();
}
public function save() {
$this->typeValueList->setModelValue($this->model->email, $this->email);
$id = parent::save();
return $id;
}
}