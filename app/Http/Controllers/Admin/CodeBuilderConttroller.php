<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Resources\ModuleResources;

class CodeBuilderConttroller extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {

        return view('admin.code-builder-controller.index');
    }

    public function create() {
        $moduleResource = \App\Model\Resources\ModuleResources::factoryCreate();
        $tables = $moduleResource->getTables();
        $module = new \App\Model\Module();
        return view('admin.code-builder-controller.add', compact('tables', 'module'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        $moduleResource = \App\Model\Resources\ModuleResources::factoryCreate();
        $module = new \App\Model\Module();
        return $moduleResource->validateAndSave($request, $module);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
