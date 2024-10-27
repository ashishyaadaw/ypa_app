<?php

namespace App\Http\Controllers\Api;

use App\Models\Notice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\NoticeResource;

class NoticeController extends Controller
{
    //

    public function index()
    {
        $notices = Notice::get();
        if ($notices->count() > 0) {
            return NoticeResource::collection($notices);
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

        $notice = Notice::create([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'priority' => $request->priority,
            'href' => $request->href,
            'status' => $request->status,
        ]);

        return response()->json([
            'message' => 'Notice Created Successfully',
            'data' => new NoticeResource($notice)
        ], 200);

    }

    public function show(Notice $notice)
    {
        return new NoticeResource($notice);
    }
    public function update(Request $request, Notice $notice)
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

        $notice->update([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'priority' => $request->priority,
            'href' => $request->href,
            'status' => $request->status,
        ]);

        return response()->json([
            'message' => 'Notice Updated Successfully',
            'data' => new NoticeResource($notice)
        ], 200);

    }
    public function destroy(Notice $notice)
    {
        $notice->delete();
        return response()->json([
            'message' => 'Notice deleted Successfully'
        ], 200);
    }
    public function deleteMultiple(Request $request)
    {
        $ids = $request->input('ids'); // Expecting an array of IDs

        if (is_array($ids) && !empty($ids)) {
            Notice::whereIn('id', $ids)->delete();
            return response()->json(['status' => 'success', 'message' => 'Notices deleted successfully.']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Invalid or empty IDs array.'], 400);
        }
    }


}
