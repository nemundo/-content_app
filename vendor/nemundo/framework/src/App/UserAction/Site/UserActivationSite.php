<?phpnamespace Nemundo\App\UserAction\Site;use Nemundo\App\UserAction\Page\UserActivationPage;use Nemundo\Core\Language\LanguageCode;use Nemundo\Web\Site\AbstractSite;class UserActivationSite extends AbstractSite{    /**     * @var UserActivationSite     */    public static $site;    protected function loadSite()    {        $this->title[LanguageCode::EN] = 'User Activation';        $this->title[LanguageCode::DE] = 'Benutzer Aktivierung';        $this->url = 'user-activation';        $this->menuActive = false;        UserActivationSite::$site = $this;    }    public function loadContent()    {        (new UserActivationPage())->render();    }}