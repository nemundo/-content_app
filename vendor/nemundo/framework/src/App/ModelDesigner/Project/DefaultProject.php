<?phpnamespace Nemundo\App\ModelDesigner\Project;use Nemundo\Core\Base\AbstractBase;use Nemundo\Core\File\File;use Nemundo\Core\Json\Document\JsonDocument;use Nemundo\Core\Json\Reader\JsonReader;use Nemundo\Project\AbstractProject;use Nemundo\Project\Path\ProjectPath;class DefaultProject extends AbstractBase{    public function getDefaultProject()    {        /** @var AbstractProject $project */        $project = null;        $filename = $this->getConfigFilename();        if ((new File($filename))->fileExists()) {            $file = new JsonReader();            $file->fromFilename($filename);            foreach ($file->getData() as $jsonRow) {                $className = $jsonRow['project'];                if (class_exists($className)) {                    $project = new $className();                }            }        }        return $project;    }    public function setDefaultProject($projectClassName) {        $config = [];        $config['project'] = $projectClassName;        $file = new JsonDocument();        $file->filename = (new DefaultProject())->getConfigFilename();        $file->overwriteExistingFile = true;        $file->addRow($config);        $file->writeFile();    }    public function getConfigFilename()    {        $filename = (new ProjectPath())            ->addPath('config')            ->addPath('default_project.json')            ->getFullFilename();        return $filename;    }}