<?phpnamespace Nemundo\Admin\ActionSite;use Nemundo\Core\Language\LanguageCode;use Nemundo\Package\FontAwesome\Icon\EditIcon;use Nemundo\Package\FontAwesome\Site\IconSiteTrait;use Nemundo\Web\Action\Site\ActionSite;use Nemundo\Web\Action\Com\AbstractActionContainer;class EditActionSite extends AbstractIconActionSite{    public function __construct(AbstractActionContainer $panel)    {        parent::__construct($panel);        $this->title[LanguageCode::EN] = 'Edit';        $this->title[LanguageCode::DE] = 'Bearbeiten';        $this->actionName = 'edit';        $this->iconName = 'edit';    }}