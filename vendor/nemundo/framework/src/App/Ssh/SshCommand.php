<?phpnamespace Nemundo\App\Ssh;class SshCommand extends AbstractSshCommand  // AbstractSsh{    public function runCommand()    {        return parent::runCommand(); // TODO: Change the autogenerated stub    }    public function addCommand($command)    {        return parent::addCommand($command); // TODO: Change the autogenerated stub    }    /*    public function runCommand($command)    {        // to do:        // remove empty command line        if (!$this->connect()) {            return;        }        $sshCommand = null;        if (is_array($command)) {            $sshCommand = implode(';', $command);        } else {            $sshCommand = $command;        }        $returnValue = $this->ssh->exec($sshCommand);        return $returnValue;    }*/}