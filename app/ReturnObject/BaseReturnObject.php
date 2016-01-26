<?php

namespace App\ReturnObject;

abstract class BaseReturnObject implements ReturnObjectInterface {

    protected $isValid;
    protected $message;

    public function __construct($message = "") {
        $this->message = $message;
    }

    public function isValid() {
        return $this->isValid;
    }

    public function setMessage($message) {
        $this->message = $message;
    }

    public function appendMessage($message) {
        $this->message.=$message;
    }

    public function clearMessage() {
        $this->message = "";
    }

    public function getMessage() {
        return $this->message;
    }

}
