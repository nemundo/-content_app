<?php
namespace Nemundo\Content\App\FileTransfer\Content\File;
use Nemundo\Content\View\AbstractContentView;
class FileView extends AbstractContentView {
/**
* @var FileType
*/
public $contentType;

protected function loadView() {
$this->viewName='default';
$this->viewId = 'fc1af361-533a-47f8-a96a-103c18518cdc';
$this->defaultView = true;
}
public function getContent() {
return parent::getContent();
}
}