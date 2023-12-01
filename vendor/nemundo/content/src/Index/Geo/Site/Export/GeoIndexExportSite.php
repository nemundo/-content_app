<?phpnamespace Nemundo\Content\Index\Geo\Site\Export;use Nemundo\Content\Index\Geo\Data\GeoIndex\GeoIndexReader;use Nemundo\Content\Index\Geo\Site\Json\GeoIndexJsonSite;use Nemundo\Core\Csv\Document\CsvDocument;use Nemundo\Web\Site\AbstractJsonSite;use Nemundo\Web\Site\AbstractSite;class GeoIndexExportSite extends AbstractSite{    /**     * @var GeoIndexCsvSite     */    public static $site;    protected function loadSite()    {        $this->url = 'geo-index';        new GeoIndexCsvSite($this);        new GeoIndexJsonSite($this);    }    public function loadContent()    {        $document = new CsvDocument('geo_index.csv');        $reader = new GeoIndexReader();        $reader->model->loadContent();        $reader->model->content->loadContentType();        //$reader->filter->andEqual($reader->model->id, (new GeoIndexParameter())->getValue());        $reader->limit = 30;        foreach ($reader->getData() as $geoIndexRow) {            $data = [];            $data['place'] = $geoIndexRow->place;            $data['lat'] = $geoIndexRow->coordinate->latitude;            $data['lon'] = $geoIndexRow->coordinate->longitude;            $document->addRow($data);        }        $document->render();    }}