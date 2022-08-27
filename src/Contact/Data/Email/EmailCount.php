<?php
namespace Nemundo\Content\App\Contact\Data\Email;
class EmailCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var EmailModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EmailModel();
}
}