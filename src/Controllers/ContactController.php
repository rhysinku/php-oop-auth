<?php

namespace Controllers;

use Model\ContactModel;
use Util\StatusMessage;
use Util\Validation;
use PDOException;
class ContactController {

    private $contact;

    public function __construct(){
        $this->contact = new ContactModel();
    }

    public function addConctact($userID , $firstname , $lastname , $email , $phone){

        $inputFields = [$userID , $firstname , $lastname , $email , $phone];
        $checkInput = Validation::isEmptyInput($inputFields);

        if($checkInput['status'] == true){
            return new StatusMessage('error', $checkInput['message']);
        }

        $addContactSuccess = $this->contact->addContact($userID , $firstname , $lastname , $email , $phone);

        if($addContactSuccess){
            return new StatusMessage('success','Add Contact Succes');
        }else{
            return new StatusMessage('error','Adding Contact Failed');
        }
    }

}

