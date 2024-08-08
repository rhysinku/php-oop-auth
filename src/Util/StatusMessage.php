<?php 
namespace Util;
class StatusMesssage {

    public $status;
    public $message;

    public function __construct($status , $message) {
        $this->status = $status;
        $this->message = $message;
    }
    
    public function __toString() {
        return json_encode(['status' => $this->status,
        'message'=> $this->message]);
    }

}