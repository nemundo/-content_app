<?phpnamespace Nemundo\App\SystemLog\Page;use Nemundo\App\SystemLog\Com\Container\SystemLogContainer;use Nemundo\Com\Template\AbstractTemplateDocument;class SystemLogPage extends AbstractTemplateDocument{    public function getContent()    {        new SystemLogContainer($this);        return parent::getContent();    }}