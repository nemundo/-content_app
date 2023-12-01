<?phpnamespace Nemundo\App\Backup\Site;use Nemundo\App\Backup\Data\Backup\BackupReader;use Nemundo\App\Backup\Parameter\BackupParameter;use Nemundo\App\Backup\Parameter\FileParameter;use Nemundo\App\Backup\Path\BackupPath;use Nemundo\Core\Http\Response\FileResponse;use Nemundo\Web\Site\AbstractSite;class ExportSite extends AbstractSite{    /**     * @var ExportSite     */    public static $site;    protected function loadSite()    {        $this->title = 'Export';        $this->url = 'export';        $this->menuActive = false;        ExportSite::$site = $this;    }    public function loadContent()    {$backupId = (new BackupParameter())->getValue();$backupRow = (new BackupReader())->getRowById($backupId);        $fullFilename= $backupRow->getBackup()->export();        $response = new FileResponse();        $response->filename = $fullFilename;        $response->sendResponse();    }}