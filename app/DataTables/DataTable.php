<?php

namespace App\DataTables;

use yajra\Datatables\Helper;
use Symfony\Component\HttpFoundation\JsonResponse;

class DataTable extends \yajra\Datatables\Engines\EloquentEngine {

    public function __construct($model, \yajra\Datatables\Request $request) {
        parent::__construct($model, $request);
    }

    /*
     * $name string -> name of column in data table u wanna make action
     * @data callback function($value,$row)
     * @data object instance of Base\ColumnInterface 
     */

    public function addModificatorToColumn($name, $data) {
        $this->editColumn($name, $data);
    }

    public function make($mDataSupport = false, $orderFirst = false) {
        return parent::make($mDataSupport, $orderFirst);
    }

    protected function getConfig() {
        return new Base\BaseConfig();
    }

    protected function getProcessor($results, $columnDef, $templates) {
        $processor = $this->getConfig()->getPrecessor();
        return $processor($results, $columnDef, $templates);
    }

    public function render($object = false) {
        $processor = $this->getProcessor(
                $this->results(), $this->columnDef, $this->templates
        );


        $data = $processor->process($object);
        $output = [
            'draw' => (int) $this->request['draw'],
            'recordsTotal' => $this->totalRecords,
            'recordsFiltered' => $this->filteredRecords,
        ];

        if (isset($this->transformer)) {
            $fractal = new Manager();
            $resource = new Collection($data, new $this->transformer());
            $collection = $fractal->createData($resource)->toArray();
            $output['data'] = $collection['data'];
        } else {
            $output['data'] = Helper::transform($data);
        }

        if ($this->isDebugging()) {
            $output = $this->showDebugger($output);
        }

        return new JsonResponse($output);
    }

    /*
     * $name string name of column
     * $content string/callback function($value,$row)
     */

    public function editColumn($name, $content) {
        $this->columnDef['edit'][] = ['name' => $name, 'content' => $content];
        return $this;
    }

}
