<?php

namespace Nemundo\Content\App\File\Content\Document;

use Nemundo\Content\App\File\Data\Document\Document;
use Nemundo\Content\App\File\Data\Document\DocumentUpdate;
use Nemundo\Content\Type\AbstractContentBuilder;
use Nemundo\Core\File\FileInformation;
use Nemundo\Core\File\Pdf\PdfFile;
use Nemundo\Core\System\OperatingSystem;
use Nemundo\Core\TextFile\Reader\TextFileReader;
use Nemundo\Model\Data\Property\File\FileProperty;
use Nemundo\Office\Word\WordReader;

class DocumentBuilder extends AbstractContentBuilder
{

    /**
     * @var FileProperty
     */
    public $document;


    protected function loadBuilder()
    {

        $this->contentType = new DocumentType();
        $this->document = new FileProperty();

    }


    protected function onCreate()
    {

        $data = new Document();
        $data->document->fromFileProperty($this->document);
        $this->dataId = $data->save();

        $documentRow = (new DocumentItem($this->dataId))->getDataRow();
        $filename = $documentRow->document->getFullFilename();
        $file = new FileInformation($filename);

        $text = '';
        if ((new OperatingSystem())->isLinux()) {

            if ($file->isPdf()) {

                $pdfFile = new PdfFile($filename);
                $text = $pdfFile->getPdfText();

            }

        }

        if ($file->isText()) {

            $txtFile = new TextFileReader($filename);
            $text = $txtFile->getText();

        }

        if ($file->isWord()) {
            $text = (new WordReader($filename))->getText();
        }

        $update = new DocumentUpdate();
        $update->text = $text;
        $update->updateById($this->dataId);

    }

}