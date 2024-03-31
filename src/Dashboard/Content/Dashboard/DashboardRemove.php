<?php
namespace Nemundo\Content\App\Dashboard\Content\Dashboard;
use Nemundo\Content\Type\AbstractContentRemove;
class DashboardRemove extends AbstractContentRemove {
protected function loadRemove() {
$this->contentType = new DashboardType();
}
protected function onDelete() {
}
}