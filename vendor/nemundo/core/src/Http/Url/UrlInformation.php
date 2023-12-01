<?phpnamespace Nemundo\Core\Http\Url;use Nemundo\Core\Base\AbstractBaseClass;use Nemundo\Core\Type\Text\Text;class UrlInformation extends AbstractBaseClass{    /**     * @var string     */    private $url;    /**     * @var string[]     */    protected $requestList = [];    protected $parameter;    function __construct($url = null)    {        $this->url = $url;        if ($this->url == null) {            $this->url = $_SERVER['REQUEST_URI'];        }        // temporäres GET Array        //$this->get = $_GET;        // muss aus parse_url ausgelesen werden!!!        if ($this->url !== null) {            $parsedUrl = parse_url($this->url, PHP_URL_QUERY);            //(new Debug())->write($parsedUrl);            //exit;            if ($parsedUrl !== null) {                parse_str($parsedUrl, $this->requestList);            }        }    }    /*    public function addParameterValue($parameterName, $value = '')    {        $this->parameter[$parameterName] = $value;        return $this;    }*/    public function getUrl()    {        $url = strtok($this->url, '?');        if (sizeof($this->requestList) > 0) {            $query_string = http_build_query($this->requestList);            $url = $url . '?' . $query_string;        }        return $url;    }    public function getUrlWithoutParameter()    {        $url = strtok($this->url, '?');        return $url;    }    public function getHost()    {        $host = parse_url($this->url, PHP_URL_HOST);        if ($host !== null) {            $host = (new Text($host))->removeLeft('www.')->getValue();        }        return $host;    }    public function getDomain()    {        $host = parse_url($this->url, PHP_URL_HOST);        return $host;    }    public function getDomainWithScheme()    {        $result = parse_url($this->url);        $domain = '';        if (isset($result['scheme'])) {            $domain = $result['scheme'] . '://';        }        if (isset($result['host'])) {            $domain .= $result['host'];        }        return $domain;    }    public function getProtocol()    {        $protocol = parse_url($this->url, PHP_URL_SCHEME);        return $protocol;    }    public function getParameterValue($parameterName)    {        $value = '';        if (isset($this->requestList[$parameterName])) {            $value = $this->requestList[$parameterName];        }        return $value;    }    public function getFilename()    {        $filename = basename($this->getUrlWithoutParameter());  //url, '?' . $_SERVER['QUERY_STRING']);        return $filename;    }    public function getFilenameExtension()    {        $path_info = pathinfo($this->url);        $filenameExtension = '';        if (isset($path_info['extension'])) {            $filenameExtension = $path_info['extension'];        }        return $filenameExtension;    }    public function isSecure()    {    }    public function getHeader()    {        return get_headers($this->url);    }    public function getResponseCode()    {        $responseCode = get_headers($this->url)[0];        $responseCode = (int)substr($responseCode, 9, 3);        return $responseCode;    }    public function existsUrl()    {        $returnValue = false;        if ($this->getResponseCode() == '200') {            $returnValue = true;        }        return $returnValue;    }}