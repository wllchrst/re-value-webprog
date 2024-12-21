<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public static function uploadImage(Request $request, $key = "image_path")
    {
        if ($request->hasFile($key)) {
            // Get the image file from the request
            $image = $request->file($key);

            // Read the file and encode it to Base64
            $imageData = base64_encode(file_get_contents($image->getRealPath()));

            // Optionally, you can also get the MIME type of the image for the data URI
            $mimeType = $image->getMimeType();

            // Return the Base64 string, optionally in a Data URI format
            return 'data:' . $mimeType . ';base64,' . $imageData;
        }

        return null; // If no image is provided
    }
}
