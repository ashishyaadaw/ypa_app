<?php

namespace App\Http\Controllers\Api;

use App\Models\Slides;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SlidesResource;

class SlidesController extends Controller
{
    //

    public function index()
    {
        $slides = Slides::get();
        if ($slides->count() > 0) {
            return SlidesResource::collection($slides);
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
            'priority' => 'required',
            'href' => 'string',
            'status' => 'string',
        ]);
        if (!$validator) {
            return response()->json([
                'message' => 'all field neccessary'
            ]);
        }

        $slide = Slides::create([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'priority' => $request->priority,
            'href' => $request->href,
            'status' => $request->status,
        ]);

        return response()->json([
            'message' => 'Slides Created Successfully',
            'data' => new SlidesResource(resource: $slide)
        ], 200);

    }

    public function show(Slides $slide)
    {
        return new SlidesResource($slide);
    }
    public function update(Request $request, Slides $slide)
    {
        $validator = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'date' => 'required',
            'priority' => 'required',
            'href' => 'string',
            'status' => 'string',
        ]);
        if (!$validator) {
            return response()->json([
                'message' => 'all field neccessary'
            ]);
        }

        $slide->update([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'priority' => $request->priority,
            'href' => $request->href,
            'status' => $request->status,
        ]);

        return response()->json([
            'message' => 'Slides Updated Successfully',
            'data' => new SlidesResource($slide)
        ], 200);

    }
    public function destroy(Slides $slide)
    {
        $slide->delete();
        return response()->json([
            'message' => 'Slides deleted Successfully'
        ], 200);
    }


    public function deleteMultiple(Request $request)
    {
        $ids = $request->input('ids'); // Expecting an array of IDs

        if (is_array($ids) && !empty($ids)) {
            Slides::whereIn('id', $ids)->delete();
            return response()->json(['status' => 'success', 'message' => 'Slides deleted successfully.']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Invalid or empty IDs array.'], 400);
        }
    }


}
