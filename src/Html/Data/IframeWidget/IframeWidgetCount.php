<?php
namespace Nemundo\Content\App\Html\Data\IframeWidget;
class IframeWidgetCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var IframeWidgetModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new IframeWidgetModel();
}
}