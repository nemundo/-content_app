<?phpnamespace Nemundo\Admin\Site;use Nemundo\Core\Language\LanguageCode;use Nemundo\Web\Site\AbstractSiteTree;abstract class AbstractViewSite extends AbstractAdminIconSite{    public function __construct(AbstractSiteTree $site = null)    {        $this->title[LanguageCode::EN] = 'View';        $this->title[LanguageCode::DE] = 'Anzeigen';        $this->url = 'view';        parent::__construct($site);        $this->iconName='info';    }    /*protected function loadSite()    {    }*/}