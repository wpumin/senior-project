<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageUpload;

class ImageUploadController extends Controller
{
    public function fileCreate()
    {
        return view('parent.imageupload');
    }

    public function fileStore(Request $request)
    {
        $image_filename = $request->file('file')->getClientOriginalName();
        $public_path = 'images/Payments/';
        $destination = base_path() . "/public/" . $public_path;
        $request->file('file')->move($destination, $image_filename);

        $imageUpload = new ImageUpload();
        $imageUpload->filename = $public_path . $image_filename;
        $imageUpload->save();
        return response()->json(['success' => $image_filename]);
    }

    public function fileDestroy(Request $request)
    {
        $filename =  $request->get('filename');
        $public_path = 'images/Payments/' . $filename;
        ImageUpload::where('filename', $public_path)->delete();

        $destination = base_path() . "/public/" . $public_path;

        if (file_exists($destination)) {
            unlink($destination);
        }
        return $filename;
    }
}
