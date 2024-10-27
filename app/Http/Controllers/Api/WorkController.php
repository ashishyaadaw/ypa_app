<?php

namespace App\Http\Controllers\Api;

use App\Models\Work;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\WorkResource;

class WorkController extends Controller
{
    //

    public function index()
    {
        $works = Work::get();
        if ($works->count() > 0) {
            return WorkResource::collection($works);
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

        $work = Work::create([
            'title' => $request->title,
            'name' => $request->name,
            'contents' => $request->contents,
            'href' => $request->href,
            'src' => $request->src,
            'status' => $request->status,
        ]);

        return response()->json([
            'message' => 'Work Created Successfully',
            'data' => new WorkResource(resource: $work)
        ], 200);

    }

    public function show(Work $work)
    {
        return new WorkResource($work);
    }
    public function update(Request $request, Work $work)
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

        $work->update([
            'title' => $request->title,
            'name' => $request->name,
            'contents' => $request->contents,
            'href' => $request->href,
            'src' => $request->src,
            'status' => $request->status,
        ]);

        return response()->json([
            'message' => 'Work Updated Successfully',
            'data' => new WorkResource($work)
        ], 200);

    }
    public function destroy(Work $work)
    {
        $work->delete();
        return response()->json([
            'message' => 'Work deleted Successfully'
        ], 200);
    }


    public function deleteMultiple(Request $request)
    {
        $ids = $request->input('ids'); // Expecting an array of IDs

        if (is_array($ids) && !empty($ids)) {
            Work::whereIn('id', $ids)->delete();
            return response()->json(['status' => 'success', 'message' => 'Notices deleted successfully.']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Invalid or empty IDs array.'], 400);
        }
    }


}
