<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Auth;

class Multimedia extends Model {

    protected $fillable = array(
        'path', 'type', 'user_id', 'article_id', 'description',
    );

    public function user() {

        return $this->belongsTo('App\User');
    }

    public function article() {

        return $this->belongsTo('App\Article');
    }

    public function storeUploadedFile(UploadedFile $file) {
        $userFolderPath = public_path() . '/user_images/' . Auth::user()->id;
        $imageName = $file->getClientOriginalName();
        $this->path = $userFolderPath . '/' . $imageName;

        if (!file_exists($userFolderPath)) {
            mkdir($userFolderPath);
        }
        if (!is_writable($userFolderPath)) {
            throw new \Exception(sprintf("Can't store file. Path '%s' isn't writable", $userFolderPath));
        }

        $file->move($userFolderPath, $imageName);

        return $this;
    }

    public function addMultimedia($articleId = false, $name = '') {
        $this->resetMainImage($articleId);
        $path_parts = pathinfo($this->path);
        if (empty($name)) {
            $name = $path_parts['basename'];
        }

        $this->name = $name;
        $this->user_id = Auth::user()->id;
        $this->url = $this->createUserImageUrl($path_parts['basename']);
        if ($articleId !== false) {
            $this->article_id = (int) $articleId;
        }
        return $this;
    }

    private function createUserImageUrl($fileName) {
        return '/user_images/' . Auth::user()->id . '/' . $fileName;
    }

    protected function resetMainImage($articleId) {
        $multimedia = $this->where('article_id', $articleId)->first();
        if ($multimedia) {//reset main image
            $multimedia->article_id = null;
            $multimedia->save();
        }
    }

}
