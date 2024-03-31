<?phpnamespace Nemundo\Content\App\Favorite\Site;use Nemundo\Admin\Site\AbstractAdminIconSite;use Nemundo\Content\App\Favorite\Action\FavoriteContentAction;use Nemundo\Content\App\Favorite\Data\Favorite\Favorite;use Nemundo\Content\Builder\ContentBuilder;use Nemundo\Content\Parameter\ContentParameter;use Nemundo\Core\Debug\Debug;use Nemundo\Core\Http\Url\UrlReferer;use Nemundo\User\Session\UserSession;class FavoriteSaveSite extends AbstractAdminIconSite  // AbstractIconSite // AbstractIconSite{    /**     * @var FavoriteSaveSite     */    public static $site;    protected function loadSite()    {        $this->title = 'Favorite Save';        $this->url = 'favorite-save';        $this->menuActive = false;        $this->iconName = 'bookmark';  // 'star-half-stroke';   //= new EmptyFavoriteIcon();        //<i class="fa-light fa-star-half-stroke"></i>        new FavoriteDeleteSite($this);        FavoriteSaveSite::$site = $this;    }    public function loadContent()    {        $contentParameter = new ContentParameter();        $contentParameter->contentTypeCheck = false;        $builder = new ContentBuilder($contentParameter->getValue());        //$action = new FavoriteContentAction();        //$action->onAction($builder->getContentItem());        if ((new UserSession())->isUserLogged()) {            $data = new Favorite();            $data->updateOnDuplicate = true;            $data->contentId = $contentParameter->getValue();  // $item->getContentId();            $data->userId = (new UserSession())->userId;            $data->subject = $builder->getContentItem()->getSubject();  // $item->getSubject();            $data->save();        } else {            (new Debug())->write('No User Logged');        }        (new UrlReferer())->redirect();    }}