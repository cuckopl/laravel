<?php

namespace App\DataTables\Processors;

use Illuminate\Support\Arr;
use \yajra\Datatables\Helper;
use yajra\Datatables\Processors\RowProcessor;

class CustomProcessor {

    /**
     * Processed data output
     *
     * @var array
     */
    protected $output = [];

    /**
     * @var array
     */
    protected $appendColumns = [];

    /**
     * @var array
     */
    protected $editColumns = [];

    /**
     * @var array
     */
    protected $excessColumns = [];

    /**
     * @var mixed
     */
    protected $results;

    /**
     * @var array
     */
    protected $templates;

    /**
     * @param mixed $results
     * @param array $columnDef
     * @param array $templates
     */
    public function __construct($results, array $columnDef, array $templates) {
        $this->results = $results;
        $this->appendColumns = $columnDef['append'];
        $this->editColumns = $columnDef['edit'];
        $this->excessColumns = $columnDef['excess'];
        $this->templates = $templates;
    }

    /**
     * Process data to output on browser
     *
     * @param bool $object
     * @return array
     */
    public function process($object = false) {
        $this->output = [];
        foreach ($this->results as $row) {
            $data = Helper::convertToArray($row);
            $value = $this->addColumns($data, $row);
            $value = $this->editColumns($value, $row);
            $value = $this->setupRowVariables($value, $row);
            if (!$object) {
                $value = Arr::flatten($this->removeExcessColumns($value));
            } else {
                $value = $this->removeExcessColumns($value);
            }
            $this->output[] = $value;
        }

        return $this->output;
    }

    /**
     * Process add columns.
     *
     * @param array $data
     * @param mixed $row
     * @return array
     */
    protected function addColumns(array $data, $row) {
        foreach ($this->appendColumns as $key => $value) {
            if (is_callable($value['content'])) {
                $data[$value['name']] = $value['content']($data, $row);
            } else if ($value['content'] instanceof \App\DataTables\Base\ColumnInterface) {
                $data[$value['name']] = $value['content']->render($data, $row);
            } else {
                $data[$value['name']] = Helper::compileContent($value['content'], $data, $row);
            }
        }

        return $data;
    }

    /**
     * Process edit columns.
     *
     * @param array $data
     * @param mixed $row
     * @return array
     */
    protected function editColumns(array $data, $row) {

        foreach ($this->editColumns as $key => $value) {
            if (is_callable($value['content'])) {
                $value['content'] = $value['content']($data, $row);
                $data[$value['name']] = $value['content'];
            } elseif ($value['content'] instanceof ColumnInterface) {
                $value['content'] = $value['content']->render($data, $row);
                $data[$value['name']] = $value['content'];
            } else {
                $value['content'] = Helper::compileContent($value['content'], $data, $row);
                $data[$value['name']] = $value['content'];
            }
        }

        return $data;
    }

    /**
     * Setup additional DT row variables.
     *
     * @param mixed $data
     * @param mixed $row
     * @return array
     */
    protected function setupRowVariables($data, $row) {
        $processor = new RowProcessor($data, $row);

        return $processor
                        ->rowValue('DT_RowId', $this->templates['DT_RowId'])
                        ->rowValue('DT_RowClass', $this->templates['DT_RowClass'])
                        ->rowData('DT_RowData', $this->templates['DT_RowData'])
                        ->rowData('DT_RowAttr', $this->templates['DT_RowAttr'])
                        ->getData();
    }

    /**
     * Remove declared hidden columns.
     *
     * @param array $data
     * @return array
     */
    protected function removeExcessColumns(array $data) {
        foreach ($this->excessColumns as $value) {
            unset($data[$value]);
        }

        return $data;
    }

}
