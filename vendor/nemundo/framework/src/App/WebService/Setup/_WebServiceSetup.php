<?phpnamespace Nemundo\App\WebService\Setup;use Nemundo\App\Application\Type\AbstractApplication;use Nemundo\App\WebService\Data\WebService\WebService;use Nemundo\App\WebService\Request\AbstractWebService;use Nemundo\Core\Base\AbstractBase;class _WebServiceSetup extends AbstractBase{    /**     * @var AbstractApplication     */    private $application;    public function __construct(AbstractApplication $application = null)    {        $this->application = $application;    }    public function addWebService(AbstractWebService $webService)    {        $data = new WebService();        $data->updateOnDuplicate = true;        $data->id = $webService->webServiceId;        $data->webService = $webService->webService;        $data->phpClass = $webService->getClassName();        if ($this->application !== null) {            $data->applicationId = $this->application->applicationId;        }        $data->save();        return $this;    }}