<?phpnamespace Nemundo\Content\Site;use Nemundo\Admin\Site\AbstractDeleteIconSite;use Nemundo\Content\Builder\ContentBuilder;use Nemundo\Content\Parameter\ContentParameter;use Nemundo\Core\Http\Url\UrlReferer;class ContentDeleteSite extends AbstractDeleteIconSite{    /**     * @var ContentDeleteSite     */    public static $site;    protected function loadSite()    {        $this->url = 'content-delete';        ContentDeleteSite::$site = $this;    }    public function loadContent()    {        $contentParameter = new ContentParameter();        $remove = (new ContentBuilder($contentParameter->getValue()))->getRemove();        $remove->removeItem();        (new UrlReferer())->redirect();    }}