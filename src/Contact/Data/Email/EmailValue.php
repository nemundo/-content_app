<?php
namespace Nemundo\Content\App\Contact\Data\Email;
class EmailValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var EmailModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EmailModel();
}
}