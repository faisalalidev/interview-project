<?php

namespace App\Repositories;

use App\Models\Contact;

class ContactRepository
{
    private $_model;

    public function __construct(Contact $contact)
    {
        $this->_model = $contact;
    }

    public function saveRecord($input)
    {
        $contact = $this->_model->create($input);
        return $contact;
    }
}
