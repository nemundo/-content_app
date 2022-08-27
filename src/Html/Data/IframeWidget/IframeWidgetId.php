<?php
namespace Nemundo\Content\App\Html\Data\IframeWidget;
use Nemundo\Model\Id\AbstractModelIdValue;
class IframeWidgetId extends AbstractModelIdValue {
/**
* @var IframeWidgetModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new IframeWidgetModel();
}
}