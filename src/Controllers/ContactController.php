<?php

namespace Controllers;

use Model\ContactModel;
use PDOException;
class ContactController {

    private $contact;

    public function __construct(){
        $this->contact = new ContactModel();
    }

}

