<?php

namespace App\Paginator;

use App\Model;

class Paginator implements PaginatorInterface {

    protected $modelToPaginate;
    protected $filters = array();
    protected $itemsPerPage = 10;

    public function __construct(Model $modelToPaginate, $filters) {
        $this->modelToPaginate = $modelToPaginate;
        $this->filters = $filters;
    }

    public function setFilters($filters) {
        $this->filters[] = array_merge($filters, $this->filters);
        return $this;
    }

    public function getData() {
        
    }

    protected function addFilters() {
        foreach ($this->filters as $name => $val) {
            $this->modelToPaginate;
        }
    }

}
