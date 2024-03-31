<?php
namespace Nemundo\Content\App\Dashboard\Content\Dashboard;
use Nemundo\Content\View\AbstractContentView;
class DashboardView extends AbstractContentView {
protected function loadView() {
$this->viewName='default';
$this->viewId = '721f47c7-36e2-401b-a75f-710428508de8';
$this->defaultView = true;
}
public function getContent() {
return parent::getContent();
}
}