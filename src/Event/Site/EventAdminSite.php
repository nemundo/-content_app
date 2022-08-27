<?php
namespace Nemundo\Content\App\Event\Site;
use Nemundo\Web\Site\AbstractSite;
use Nemundo\Content\App\Event\Page\EventAdminPage;
class EventAdminSite extends AbstractSite {
protected function loadSite() {
$this->title = 'EventAdmin';
$this->url = 'EventAdmin';
}
public function loadContent() {
(new EventAdminPage())->render();
}
}