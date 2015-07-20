<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Http\Request;
use App\Http\Requests\CreateArticleRequest;
use Illuminate\Support\Facades\Auth;

class FileUploadController extends Controller {



    public function index() {
        return view('file-upload.file-upload');
    }
    /*
     * gets ajax post request with files
     */
    
    public function storeMedia(Request $request) {
        
        return dd($request->all());
    }

}
