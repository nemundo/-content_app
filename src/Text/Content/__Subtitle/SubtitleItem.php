<?php
namespace Nemundo\Content\App\Text\Content\Subtitle;
use Nemundo\Content\Type\AbstractContentItem;
class SubtitleItem extends AbstractContentItem {
protected function loadItem() {
$this->contentType = new SubtitleType();
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