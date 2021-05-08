<?php
namespace App\Services\Uploader;

use App\File;
use Illuminate\Http\Request;

class Uploader
{
    private $request;
    private $storageManager;
    private $file;
    private $ffmpeg;
    public function __construct(Request $request, StorageManager $storageManager, FFMpegService $ffmpeg)
    {
        $this->request = $request;
        $this->storageManager = $storageManager;
        $this->file = $request->file;
        $this->ffmpeg = $ffmpeg;
    }
    public function upload()
    {
        $this->putFileIntoStorage();
        // dd($this->ffmpeg->durationOf($this->storageManager->getAbsolutePathOf($this->file->getClientOriginalName(), $this->getType(),$this->isPrivate())));

    }
    private function saveFileIntoDatabase()
    {
        $file = new File([
            'name' => $this->file->getClientOriginalName(),
            'size' => $this->file->getSize(),
            'type' => $this->getType(),
            'is_private' => $this->isPrivate(),
        ]);
    }
    private function putFileIntoStorage()
    {
        $method = $this->request->has('is-private') ? 'putFileAsPrivate' : 'putFileAsPublic';
        $this->storageManager->$method($this->file->getClientOriginalName(),$this->file,$this->getType());
    }
    private function isPrivate()
    {
        return $this->request->has('is-private');
    }
    private function getType()
    {
        return [
            'image/jpeg' => 'image',
            'image/png' => 'image',
            'image/jpg' => 'image',
            'video/mp4' => 'video',
            'application/zip' => 'archive',
            'application/x-zip-compressed'  => 'archive',
        ][$this->file->getClientMimeType()];
    }
}
?>