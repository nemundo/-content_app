<?php
namespace Nemundo\Content\Index\Workflow\Data\Notification;
class NotificationDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var NotificationModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new NotificationModel();
}
}