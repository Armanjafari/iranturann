<?php

namespace App;

use App\Services\Uploader\StorageManager;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['name' , 'is_private' , 'type' , 'size', 'time'];
    public function isMedia()
    {
        return $this->type == 'video';
    }
    public function absolutePath()
    {
        return resolve(StorageManager::class)->getAbsolutePathOf($this->name, $this->type,$this->is_private);
    }
    public function download()
    {
        return resolve(StorageManager::class)->getFile($this->name,$this->type,$this->is_private);
    }
    // overwrite delete function
    public function delete()
    {
        resolve(StorageManager::class)->deleteFile($this->name, $this->type,$this->is_private);

        parent::delete();
    }
}
