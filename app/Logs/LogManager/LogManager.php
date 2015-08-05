<?php

namespace App\Logs\LogManager;

/**
 * Description of LogManager
 *
 * @author Pawel
 */
class LogManager {

    protected $handlers;

    public function __construct() {
        $this->loadDependencies();
    }

    protected function loadDependencies() {
        $this->getHandlers();
    }

    protected function getHandlers() {
        $this->handlers = config('logmanager.logHandlers');
    }

    public function handle($data) {
        foreach ($this->handlers as $handler) {
            $handler = new $handler();
            if ($handler->canHandle($data)) {
                $handler->handle($data);
            }
        }
    }

}
