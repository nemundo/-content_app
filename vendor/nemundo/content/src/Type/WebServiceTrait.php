<?phpnamespace Nemundo\Content\Type;use Nemundo\App\WebService\Request\AbstractWebService;use Nemundo\Content\Type\Service\AbstractContentWebService;trait WebServiceTrait{    protected $webServiceClass;    // runWebService    public function callWebService() {        /** @var AbstractContentWebService $service */        $service = new $this->webServiceClass();        $service->onSave();    }}