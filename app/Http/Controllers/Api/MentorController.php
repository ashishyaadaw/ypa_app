<?php

namespace App\Http\Controllers\Api;

use App\Models\Mentor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\MentorResource;

class MentorController extends Controller
{
    //

    public function index()
    {
        $mentors = Mentor::get();
        if ($mentors->count() > 0) {
            return MentorResource::collection($mentors);
        } else {
            return response()->json(['message' => "No record available"], 200);
        }
    }
    public function store(Request $request)
    {
        $validator = $request->validate([
            'title' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'contents' => 'required',
            'href' => 'string',
            'src' => 'string',
            'status' => 'string',
        ]);
        if (!$validator) {
            return response()->json([
                'message' => 'all field neccessary'
            ]);
        }

        $mentor = Mentor::create([
            'title' => $request->title,
            'name' => $request->name,
            'contents' => $request->contents,
            'href' => $request->href,
            'src' => $request->src,
            'status' => $request->status,
        ]);

        return response()->json([
            'message' => 'Mentor Created Successfully',
            'data' => new MentorResource(resource: $mentor)
        ], 200);

    }

    public function show(Mentor $mentor)
    {
        return new MentorResource($mentor);
    }
    public function update(Request $request, Mentor $mentor)
    {
        $validator = $request->validate([
            'title' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'contents' => 'required',
            'href' => 'string',
            'src' => 'string',
            'status' => 'string',
        ]);
        if (!$validator) {
            return response()->json([
                'message' => 'all field neccessary'
            ]);
        }

        $mentor->update([
            'title' => $request->title,
            'name' => $request->name,
            'contents' => $request->contents,
            'href' => $request->href,
            'src' => $request->src,
            'status' => $request->status,
        ]);

        return response()->json([
            'message' => 'Mentor Updated Successfully',
            'data' => new MentorResource($mentor)
        ], 200);

    }
    public function destroy(Mentor $mentor)
    {
        $mentor->delete();
        return response()->json([
            'message' => 'Mentor deleted Successfully'
        ], 200);
    }


    public function deleteMultiple(Request $request)
    {
        $ids = $request->input('ids'); // Expecting an array of IDs

        if (is_array($ids) && !empty($ids)) {
            Mentor::whereIn('id', $ids)->delete();
            return response()->json(['status' => 'success', 'message' => 'Notices deleted successfully.']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Invalid or empty IDs array.'], 400);
        }
    }


}
