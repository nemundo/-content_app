<?phpnamespace Nemundo\Content\Com\Container;use Dev\App\Stream\Event\StreamEvent;use Dev\App\Stream\Site\StreamSite;use Nemundo\App\Application\Type\AbstractApplication;use Nemundo\Content\Com\Dropdown\ApplicationContentTypeDropdown;use Nemundo\Content\Parameter\ContentTypeParameter;use Nemundo\Content\Type\EventTrait;use Nemundo\Html\Container\AbstractHtmlContainer;use Nemundo\Web\Site\Site;class ApplicationAddContentTypeContainer extends AbstractHtmlContainer{    use EventTrait;    /**     * @var AbstractApplication     */    public $application;    public function getContent()    {        $dropbox = new ApplicationContentTypeDropdown($this);        $dropbox->application = $this->application;        $parameter = new ContentTypeParameter();        if ($parameter->hasValue()) {            $contentType = $parameter->getContentType();            foreach ($this->eventList as $event) {                $contentType->addAction($event);            }            //$contentType->addEvent(new StreamEvent());            $form = $contentType->getDefaultForm($this);            $form->redirectSite = new Site();  // StreamSite::$site;        }        //$type = (new ContentTypeParameter())->getContentType();        //$type->parentId = $wikiType->getContentId();        //$form = $type->getForm($this);        //$form->redirectSite = $this-> $wikiType->getViewSite();        return parent::getContent(); // TODO: Change the autogenerated stub    }}