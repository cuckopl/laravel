<?php

namespace App\FlashMesanger;

class SuccesMessage extends BasciMessage {

    protected function setMessageType() {
        $this->messageTpe = 'succes';
    }

}
