<?phpnamespace Nemundo\App\Application\Script;use Nemundo\App\Application\Copy\AppPackageCopy;use Nemundo\App\Script\Type\AbstractConsoleScript;use Nemundo\Core\Path\Path;use Nemundo\Project\Path\WebPath;class PackageSetupScript extends AbstractConsoleScript{    protected function loadScript()    {        $this->scriptName = 'app-package';    }    public function run()    {        /*$destinationPath = (new Path())            ->addPath($this->destinationPath)            ->addPath('asset')*/        $copy = new AppPackageCopy();        $copy->destinationPath = (new WebPath())->getPath();        $copy->copyPackage();    }}