<?php

namespace App\Http\Controllers\Api;

use App\Models\Control;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ControlResource;

class ControlController extends Controller
{
    //

    public function index()
    {
        $controls = Control::get();
        if ($controls->count() > 0) {
            return ControlResource::collection($controls);
        } else {
            return response()->json(['message' => "No record available"], 200);
        }
    }
    public function store(Request $request)
    {
        $validator = $request->validate([
            'category' => 'required|string',
            'description' => 'required|string',
            'file_path' => 'required|string',
            'link' => 'required|string',
            'other' => 'required|string',
            'status' => 'string',
        ]);
        if (!$validator) {
            return response()->json([
                'message' => 'all field neccessary'
            ]);
        }

        $control = Control::create([
            'category' => $request->category,
            'description' => $request->description,
            'file_path' => $request->file_path,
            'link' => $request->link,
            'other' => $request->other,
            'status' => $request->status,
        ]);

        return response()->json([
            'message' => 'Control Created Successfully',
            'data' => new ControlResource($control)
        ], 200);

    }

    public function show(Control $control)
    {
        return new ControlResource($control);
    }
    public function update(Request $request, Control $control)
    {
        $validator = $request->validate([
            'category' => 'required|string',
            'description' => 'required|string',
            'file_path' => 'required|string',
            'link' => 'required|string',
            'other' => 'required|string',
            'status' => 'string',
        ]);
        if (!$validator) {
            return response()->json([
                'message' => 'all field neccessary'
            ]);
        }

        $control->update([
            'category' => $request->category,
            'description' => $request->description,
            'file_path' => $request->file_path,
            'link' => $request->link,
            'other' => $request->other,
            'status' => $request->status,
        ]);

        return response()->json([
            'message' => 'Control Upcategoryd Successfully',
            'data' => new ControlResource($control)
        ], 200);

    }
    public function destroy(Control $control)
    {
        $control->delete();
        return response()->json([
            'message' => 'Control deleted Successfully'
        ], 200);
    }
    public function deleteMultiple(Request $request)
    {
        $ids = $request->input('ids'); // Expecting an array of IDs

        if (is_array($ids) && !empty($ids)) {
            Control::whereIn('id', $ids)->delete();
            return response()->json(['status' => 'success', 'message' => 'Controls deleted successfully.']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Invalid or empty IDs array.'], 400);
        }
    }


}
