<?phpnamespace Nemundo\Admin\Site;use Nemundo\Core\Language\LanguageCode;use Nemundo\Web\Site\AbstractSiteTree;abstract class AbstractNewIconSite extends AbstractAdminIconSite{    public function __construct(AbstractSiteTree $site = null)    {        $this->title[LanguageCode::EN] = 'New';        $this->title[LanguageCode::DE] = 'Neu';        $this->url = 'new';        parent::__construct($site);        $this->iconName = 'plus';    }    protected function loadSite()    {    }}