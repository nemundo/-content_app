<?phpnamespace Nemundo\Content\App\Favorite\Install;use Nemundo\App\Application\Setup\ApplicationSetup;use Nemundo\App\Application\Type\Install\AbstractInstall;use Nemundo\App\Script\Setup\ScriptSetup;use Nemundo\App\WebService\Setup\ServiceRequestSetup;use Nemundo\Content\Action\Setup\ActionSetup;use Nemundo\Content\App\Favorite\Action\FavoriteContentAction;use Nemundo\Content\App\Favorite\Application\FavoriteApplication;use Nemundo\Content\App\Favorite\_Content\FavoriteContentType;use Nemundo\Content\App\Favorite\Data\FavoriteModelCollection;use Nemundo\Content\App\Favorite\Script\CleanScript;use Nemundo\Content\App\Favorite\Service\FavoriteCountService;use Nemundo\Content\App\Favorite\Service\FavoriteDeleteServiceRequest;use Nemundo\Content\App\Favorite\Service\FavoriteListServiceRequest;use Nemundo\Content\App\Favorite\Service\FavoritePostService;use Nemundo\Content\Application\ContentApplication;use Nemundo\Content\Setup\ContentTypeSetup;use Nemundo\Model\Setup\ModelCollectionSetup;class FavoriteInstall extends AbstractInstall{    public function install()    {        (new ContentApplication())->installApp();        (new ApplicationSetup())            ->addApplication(new FavoriteApplication());        (new ModelCollectionSetup())            ->addCollection(new FavoriteModelCollection());        (new ScriptSetup(new FavoriteApplication()))            ->addScript(new CleanScript());        (new ActionSetup())            ->addContentAction(new FavoriteContentAction());        /*(new ServiceRequestSetup(new FavoriteApplication()))            ->addService(new FavoritePostService())            ->addService(new FavoriteDeleteServiceRequest())            ->addService(new FavoriteListServiceRequest())            ->addService(new FavoriteCountService());*/    }}