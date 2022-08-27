<?php
namespace Nemundo\Content\App\FileTransfer\Content\File;
use Nemundo\Content\Type\AbstractContentItem;
class FileItem extends AbstractContentItem {
protected function loadItem() {
$this->contentType = new FileType;
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