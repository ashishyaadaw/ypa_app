<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'photo' => 'required|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->file('photo')) {
            $photo = $request->file('photo');
            $filePath = $photo->store('uploads', 'public');

            return response()->json([
                'status' => 'success',
                'file_path' => $filePath
            ], 201);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Photo not uploaded'], 400);
        }
    }
}
