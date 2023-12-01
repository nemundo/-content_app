<?phpnamespace Nemundo\Web\Controller;use Nemundo\Core\Debug\Debug;use Nemundo\Html\Document\HtmlDocument;use Nemundo\Core\Http\Response\StatusCode;use Nemundo\Web\Site\AbstractSite;use Nemundo\Web\Site\AbstractSiteTree;use Nemundo\Web\Site\AbstractWildcardSite;use Nemundo\Web\Url\UrlParameterBuilder;use Nemundo\Web\WebConfig;abstract class AbstractWebController extends AbstractSiteTree{    /**     * @var AbstractWebController     */    public static $controller;    /**     * @var AbstractSite     */    public static $currentSite;    /**     * @var string[]     */    protected $urlList;    /**     * @var int     */    private $urlListCount;    /**     * @var bool     */    private $foundSite = false;    /**     * @var bool     */    private $accessForbidden = false;    abstract protected function loadController();    public function __construct()    {        $this->loadController();        AbstractWebController::$controller = $this;    }    protected function loadUrlList() {        $url = new UrlParameterBuilder();        $this->urlList = $url->getUrlList();    }    public function render()    {        $this->loadUrlList();        $this->urlListCount = sizeof($this->urlList);        $this->checkUrl($this, 1);        if (!$this->foundSite) {            $className = WebConfig::$notFoundPageClass;            /** @var HtmlDocument $page */            $page = new $className();            $page->statusCode = StatusCode::NOT_FOUND;            $page->render();        }        if ($this->accessForbidden && $this->foundSite) {            $className = WebConfig::$forbiddenPageClass;            /** @var HtmlDocument $page */            $page = new $className();            $page->statusCode = StatusCode::FORBIDDEN;            $page->render();        }    }    private function checkUrl(AbstractSiteTree $site, $urlLevel)    {        /** @var AbstractSite|AbstractWildcardSite $siteChild */        foreach ($site->getSiteList() as $siteChild) {            if ($siteChild->isObjectOfClass(AbstractWildcardSite::class)) {                // user check                $siteChild->wildcardUrl = $this->urlList[$urlLevel - 1];                $this->foundSite = $siteChild->checkWildcardUrl();                if ($this->foundSite) {                    $siteChild->loadContent();                }            }            if (!$this->foundSite) {                //(new Debug())->write($this->urlList[$urlLevel - 1].' = '.$siteChild->url);                //if ($this->urlList[$urlLevel - 1] === $siteChild->url) {                if ($this->urlList[$urlLevel - 1] == $siteChild->url) {                    //(new Debug())->write('found');                    if (!$siteChild->checkUserVisibility()) {                        $this->accessForbidden = true;                    }                    //(new Debug())->write($this->urlListCount.' = '. $urlLevel);                    if ($this->urlListCount == $urlLevel) {                        $this->foundSite = true;                        if (!$this->accessForbidden) {                            AbstractWebController::$currentSite = $siteChild;                            $siteChild->loadContent();                        }                    } else {                        $this->checkUrl($siteChild, $urlLevel + 1);                    }                }            }        }    }}