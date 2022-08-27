<?php
namespace Nemundo\Content\App\Event\Content\EventWidget;
use Nemundo\Content\Type\AbstractContentItem;
class EventWidgetItem extends AbstractContentItem {
protected function loadItem() {
$this->contentType = new EventWidgetType();
}
protected function onDataRow() {
}
/**
* @return \Nemundo\Model\Row\AbstractModelDataRow
*/
public function getDataRow() {
return parent::getDataRow(); 
}
}