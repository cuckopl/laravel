<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $permission = new \Kodeine\Acl\Models\Eloquent\Permission();
//        $permUser = $permission->create([
//            'name' => 'user',
//            'slug' => [          // pass an array of permissions.
//                'create' => true,
//                'view' => true,
//                'update' => true,
//                'delete' => true,
//                'view.phone' => true
//            ],
//            'description' => 'manage user permissions'
//        ]);
        return view('admin.admin-controller.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function dashboard() {
        return view('admin.admin-controller.dashboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        //
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
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
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
