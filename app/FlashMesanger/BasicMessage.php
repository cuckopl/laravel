<?php

namespace App\FlashMesanger;

abstract class BasciMessage extends MessageInterface {

    protected $messageTpe = false;
    protected $messageContent = null;

    public function __construct($message) {
        $this->setMessageType();
        $this->checkMessageType();
        $this->setMessageContent($message);
    }

    /*
     *  @throws InvalidArgumentException
     */

    private function checkMessageType() {
        if ($this->messageTpe == false) {
            throw new \InvalidArgumentException(' You don\'t set message type');
        }
    }

    /**
     * 
     * @return String 
     * @throws InvalidArgumentException
     */
    public function getMessageContent() {
        if ($this->messageContent == null) {
            throw new \InvalidArgumentException($this->messageTpe . ': Add message to display !');
        }
        return $this->messageContent();
    }

    abstract protected function setMessageType();

    public function setMessageContent($content) {
        $this->messageContent = (string) $content;
    }

    public function __toString() {
        return $this->getMessageContent();
    }

}
