<?php
namespace Nemundo\Content\App\FileTransfer\Content\File;
use Nemundo\Content\Type\AbstractContentType;
class FileType extends AbstractContentType {
protected function loadContentType() {
$this->typeLabel = 'File';
$this->typeId = '365ab147-089a-4b6a-be6a-1c121d8b3abf';
$this->formClassList[] = FileForm::class;
$this->viewClassList[] = FileView::class;
$this->itemClass = FileItem::class;
}
}