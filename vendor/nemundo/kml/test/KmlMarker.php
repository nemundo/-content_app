<?phprequire 'config.php';$kml = new \Nemundo\Geo\Kml\Document\KmlDocument();$kml->filename = 'kml_example.kml';$kml->kmlTitle = 'Kml Example';$style = new \Nemundo\Geo\Kml\Style\Style($kml);$style->styleId = 'hello';$iconStyle = new \Nemundo\Geo\Kml\Style\IconStyle($style);$iconStyle->iconUrl ='https://png.pngtree.com/element_our/20190530/ourmid/pngtree-correct-icon-image_1267804.jpg';$geoCoordinate = new \Nemundo\Core\Type\Geo\GeoCoordinateAltitude();$geoCoordinate->longitude = 8.5;$geoCoordinate->latitude = 42.33;//$geoCoordinate->altitude = 0;$placemark = new \Nemundo\Geo\Kml\Object\KmlMarker($kml);$placemark->styleUrl = 'hello';$placemark->label = 'Kml Placemaker';$placemark->description = 'Description';$placemark->geoCoordinate = $geoCoordinate;//  <styleUrl>#exampleStyleMap</styleUrl>$kml->render();/*$description = new \Nemundo\Geo\Kml\Property\HtmlDescription();$description->value = 'hello world';$description = new \Nemundo\Geo\Kml\Property\Description();$description->value = '123';(new \Nemundo\Core\Debug\Debug())->writeHtml($description->getContent());*/