<?php
namespace Nemundo\Content\App\Html\Data\IframeWidget;
class IframeWidgetDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var IframeWidgetModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new IframeWidgetModel();
}
}