<?php
namespace Nemundo\Content\App\Contact\Data\Email;
use Nemundo\Model\Data\AbstractModelUpdate;
class EmailUpdate extends AbstractModelUpdate {
/**
* @var EmailModel
*/
public $model;

/**
* @var string
*/
public $email;

public function __construct() {
parent::__construct();
$this->model = new EmailModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->email, $this->email);
parent::update();
}
}