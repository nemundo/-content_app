<?php

namespace Nemundo\Content\App\FileTransfer\Content\File;

use Nemundo\Admin\Com\ListBox\AdminFileUpload;
use Nemundo\Content\App\FileTransfer\Data\File\File;
use Nemundo\Content\Form\AbstractContentForm;

class FileForm extends AbstractContentForm
{

    /**
     * @var AdminFileUpload
     */
    private $file;


    public function getContent()
    {

        $this->file = new AdminFileUpload($this);
        $this->file->multiUpload = true;
        $this->file->label = 'File';

        return parent::getContent();
    }

    public function onSave()
    {

        foreach ($this->file->getMultiFileRequest() as $fileRequest) {
            $data = new File();
            $data->file->fromFileRequest($fileRequest);
            $data->save();
        }

    }

    public function onUpdate()
    {
    }
}