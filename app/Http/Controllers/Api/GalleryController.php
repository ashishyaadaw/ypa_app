<?php

namespace App\Http\Controllers\Api;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\GalleryResource;

class GalleryController extends Controller
{
    //

    public function index()
    {
        $gallery = Gallery::get();
        if ($gallery->count() > 0) {
            return GalleryResource::collection($gallery);
        } else {
            return response()->json(['message' => "No record available"], 200);
        }
    }
    public function store(Request $request)
    {
        $validator = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required',
            'type' => 'required',
            'src' => 'string',
            'status' => 'string',
        ]);
        if (!$validator) {
            return response()->json([
                'message' => 'all field neccessary'
            ]);
        }

        $gallery = Gallery::create([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'type' => $request->type,
            'src' => $request->src,
            'status' => $request->status,
        ]);

        return response()->json([
            'message' => 'Gallery Created Successfully',
            'data' => new GalleryResource(resource: $gallery)
        ], 200);

    }

    public function show(Gallery $gallery)
    {
        return new GalleryResource($gallery);
    }
    public function update(Request $request, Gallery $gallery)
    {
        $validator = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required',
            'type' => 'required',
            'src' => 'string',
            'status' => 'string',
        ]);
        if (!$validator) {
            return response()->json([
                'message' => 'all field neccessary'
            ]);
        }

        $gallery->update([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'type' => $request->type,
            'src' => $request->src,
            'status' => $request->status,
        ]);

        return response()->json([
            'message' => 'Gallery Updated Successfully',
            'data' => new GalleryResource($gallery)
        ], 200);

    }
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return response()->json([
            'message' => 'Gallery deleted Successfully'
        ], 200);
    }


    public function deleteMultiple(Request $request)
    {
        $ids = $request->input('ids'); // Expecting an array of IDs

        if (is_array($ids) && !empty($ids)) {
            Gallery::whereIn('id', $ids)->delete();
            return response()->json(['status' => 'success', 'message' => 'Gallery deleted successfully.']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Invalid or empty IDs array.'], 400);
        }
    }


}
