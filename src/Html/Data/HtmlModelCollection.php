<?php
namespace Nemundo\Content\App\Html\Data;
use Nemundo\Model\Collection\AbstractModelCollection;
class HtmlModelCollection extends AbstractModelCollection {
protected function loadCollection() {
$this->addModel(new \Nemundo\Content\App\Html\Data\IframeWidget\IframeWidgetModel());
$this->addModel(new \Nemundo\Content\App\Html\Data\ImgProperty\ImgPropertyModel());
}
}