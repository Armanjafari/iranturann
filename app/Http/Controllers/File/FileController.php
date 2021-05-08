<?php

namespace App\Http\Controllers\File;

use App\File;
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
    public function delete(File $file)
    {
        $file->delete();
        return back()->withSuccess('فایل با موفقیت حذف شد');
    }
    public function new(Request $request)
    {
        try {
            $this->validateFile($request);
            $this->uploader->upload();
            // dd($request->all());
            return redirect()->back()->withSuccess(' فایل با موفقیت اپلود شد ');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage()); //its better to not show this message and make a custom message for user
        }
    }
    public function index()
    {
        $files = File::all();
        return view('File.index', compact('files'));
    }
    public function show(File $file)
    {
        return $file->download();
    }
    private function validateFile(Request $request)
    {
        return $request->validate([
            'file' => 'required|file|mimetypes:image/jpeg,image/png,image/jpg,video/mp4,application/zip',
        ]);
    }
}
