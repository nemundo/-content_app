<?php
namespace Nemundo\Content\App\Contact\Data\Email;
class EmailDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var EmailModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EmailModel();
}
}