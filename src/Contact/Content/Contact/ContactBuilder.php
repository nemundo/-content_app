<?php

namespace Nemundo\Content\App\Contact\Content\Contact;

use Nemundo\Content\App\Contact\Data\Contact\Contact;
use Nemundo\Content\App\Contact\Data\Contact\ContactUpdate;
use Nemundo\Content\Type\AbstractContentBuilder;

class ContactBuilder extends AbstractContentBuilder
{

    public $company;

    public $firstName;

    public $lastName;

    public $street;

    public $postalCode;

    public $city;

    public $phone;

    public $email;

    protected function loadBuilder()
    {
        $this->contentType = new ContactType();
        // TODO: Implement loadBuilder() method.
    }


    protected function onCreate()
    {

        $data = new Contact();
        $data->company = $this->company;
        $data->firstName = $this->firstName;
        $data->lastName = $this->lastName;
        $data->street = $this->street;
        $data->postalCode = $this->postalCode;
        $data->city = $this->city;
        $data->phone = $this->phone;
        $data->email = $this->email;
        $this->dataId = $data->save();

    }

    protected function onUpdate()
    {

        $update = new ContactUpdate();
        $update->company = $this->company;
        $update->firstName = $this->firstName;
        $update->lastName = $this->lastName;
        $update->street = $this->street;
        $update->postalCode = $this->postalCode;
        $update->city = $this->city;
        $update->phone = $this->phone;
        $update->email = $this->email;
        $update->updateById($this->dataId);

    }


}