<?php

namespace App\View;

trait ViewRenderer {

    protected $template;
    protected $args = array();

    public function setTemplate($template) {
        $this->template = $template;
        return $this;
    }

    public function addViewVariables(array $vars) {
        $this->args = array_merge($this->args , $vars);
        return $this;
    }

    public function renderView() {
        return view($this->template, $this->args)->render();
    }

}
