<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use App\Services\Uploader\Uploader;
use Illuminate\Http\Request;

class FileController extends Controller
{
    private $uploader;
    public function __construct(Uploader $uploader)
    {
        $this->uploader = $uploader;
    }
    public function create()
    {
        return view('File.file');
    }
    public function new(Request $request)
    {
        $this->validateFile($request);
        $this->uploader->upload();
        // dd($request->all());
        return redirect()->back()->withSuccess(' فایل با موفقیت اپلود شد ');
    }
    private function validateFile(Request $request)
    {
        return $request->validate([
            'file' => 'required|file|mimetypes:image/jpeg,image/png,image/jpg,video/mp4,application/zip',
        ]);
    }
}
