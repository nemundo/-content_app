<?phpnamespace Nemundo\App\Linux\Cmd;class TarCmd extends AbstractCmd{    public $tarFilename;    public $destinationPath;    public function extract()    {        //$line = 'tar -xzf ' . $this->tarFilename;        $line = 'tar -xf ' . $this->tarFilename;        if ($this->destinationPath !== null) {            $line .= ' -C ' . $this->destinationPath;        }        $this->addCommandLine($line);    }    public function getCommandList()    {        $this->extract();        return parent::getCommandList(); // TODO: Change the autogenerated stub    }}