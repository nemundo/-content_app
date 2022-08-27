<?php
namespace Nemundo\Content\App\Text\Content\Subtitle;
use Nemundo\Content\Type\AbstractContentBuilder;
class SubtitleBuilder extends AbstractContentBuilder {
protected function loadBuilder() {
$this->contentType = new SubtitleType();
}
protected function onCreate() {
}
protected function onUpdate() {
}
}