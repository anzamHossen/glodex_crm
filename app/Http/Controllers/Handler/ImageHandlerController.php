<?php

namespace App\Http\Controllers\Handler;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class ImageHandlerController extends Controller
{
    // Function to upload country image
    public function countryFlag($file, $path = 'country-flags', $previousImagePath = null)
    {
        if ($previousImagePath) {
            $this->deleteImage($previousImagePath);
        }
    
        // Use a shorter random string
        $fileName = time() . '_' . Str::random(8) . '.' . $file->getClientOriginalExtension();

        // Save to storage/app/public/file-opening-image
        $file->storeAs($path, $fileName, 'public');

        return 'storage/' . $path . '/' . $fileName;
    }

      // Function to upload country popular image
    public function countryCoverPhoto($file, $path = 'country-cover-photo', $previousImagePath = null)
    {
        if ($previousImagePath) {
        $this->deleteImage($previousImagePath);
        }
    
        // Use a shorter random string
        $fileName = time() . '_' . Str::random(8) . '.' . $file->getClientOriginalExtension();

        // Save to storage/app/public/file-opening-image
        $file->storeAs($path, $fileName, 'public');

        return 'storage/' . $path . '/' . $fileName;
    }

    // Delete Image Method
    public function deleteImage($filePath)
    {
        $relativePath = str_replace('/storage/', 'public/', $filePath);
        if (Storage::exists($relativePath)) {
        Storage::delete($relativePath);
        }
    }

}
