<?php
namespace Nemundo\Content\App\Contact\Data\Email;
use Nemundo\Model\Id\AbstractModelIdValue;
class EmailId extends AbstractModelIdValue {
/**
* @var EmailModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EmailModel();
}
}