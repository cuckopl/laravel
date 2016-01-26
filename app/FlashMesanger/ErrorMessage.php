<?php

namespace App\FlashMesanger;

class ErrorMessage extends BasciMessage {

    protected function setMessageType() {
        $this->messageTpe = 'error';
    }

}
