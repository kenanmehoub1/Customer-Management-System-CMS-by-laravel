<?php
namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

trait FileHandlerTrait
  {
    public function generateUniqueName($file):?string
      {
        if(!$file instanceof UploadedFile)
        {
          return null;
        }
        $uuid = Str::uuid()->toString();
        $extension = $file->extension();
        if(!$extension)
        {
          return null;
        }
        return $uuid .'.'. $extension;
      }
  }
  

