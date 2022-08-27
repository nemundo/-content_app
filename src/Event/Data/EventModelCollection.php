<?php
namespace Nemundo\Content\App\Event\Data;
use Nemundo\Model\Collection\AbstractModelCollection;
class EventModelCollection extends AbstractModelCollection {
protected function loadCollection() {
$this->addModel(new \Nemundo\Content\App\Event\Data\Event\EventModel());
$this->addModel(new \Nemundo\Content\App\Event\Data\EventContentType\EventContentTypeModel());
$this->addModel(new \Nemundo\Content\App\Event\Data\EventWidget\EventWidgetModel());
}
}