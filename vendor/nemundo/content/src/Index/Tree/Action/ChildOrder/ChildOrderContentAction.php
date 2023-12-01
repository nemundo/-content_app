<?phpnamespace Nemundo\Content\Index\Tree\Action\ChildOrder;use Nemundo\Com\FormBuilder\UrlReferer\UrlRefererParameter;use Nemundo\Content\Action\AbstractContentAction;use Nemundo\Content\Index\Tree\Site\Sortable\ContentSortableSite;use Nemundo\Content\Parameter\ContentParameter;use Nemundo\Content\Type\AbstractContentType;class ChildOrderContentAction extends AbstractContentAction{    protected function loadAction()    {        $this->actionId = '3784eeb2-8f7a-41de-8e0a-4a49bb63933f';        $this->actionLabel = 'Child Order';    }    public function onMenuClick(AbstractContentType $content)    {        $site = clone(ContentSortableSite::$site);        $site->addParameter(new ContentParameter($content->getContentId()));        $site->addParameter(new UrlRefererParameter());        $site->redirect();    }}