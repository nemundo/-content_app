<?phpnamespace Nemundo\Admin\ActionSite;use Nemundo\Core\Language\LanguageCode;use Nemundo\Web\Action\Com\AbstractActionContainer;class ActiveActionSite extends AbstractIconActionSite{    public function __construct(AbstractActionContainer $container)    {        parent::__construct($container);        $this->title[LanguageCode::EN] = 'Active';        $this->title[LanguageCode::DE] = 'Aktiv';        $this->actionName = 'active';        $this->iconName = 'eye';    }}