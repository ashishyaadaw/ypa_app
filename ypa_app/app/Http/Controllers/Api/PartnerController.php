<?php

namespace App\Http\Controllers\Api;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PartnerResource;

class PartnerController extends Controller
{
    //

    public function index()
    {
        $partners = Partner::get();
        if ($partners->count() > 0) {
            return PartnerResource::collection($partners);
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
            'status' => 'string',
        ]);
        if (!$validator) {
            return response()->json([
                'message' => 'all field neccessary'
            ]);
        }

        $partner = Partner::create([
            'title' => $request->title,
            'name' => $request->name,
            'contents' => $request->contents,
            'href' => $request->href,
            'status' => $request->status,
        ]);

        return response()->json([
            'message' => 'Partner Created Successfully',
            'data' => new PartnerResource(resource: $partner)
        ], 200);

    }

    public function show(Partner $partner)
    {
        return new PartnerResource($partner);
    }
    public function update(Request $request, Partner $partner)
    {
        $validator = $request->validate([
            'title' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'contents' => 'required',
            'href' => 'string',
            'status' => 'string',
        ]);
        if (!$validator) {
            return response()->json([
                'message' => 'all field neccessary'
            ]);
        }

        $partner->update([
            'title' => $request->title,
            'name' => $request->name,
            'contents' => $request->contents,
            'href' => $request->href,
            'status' => $request->status,
        ]);

        return response()->json([
            'message' => 'Partner Updated Successfully',
            'data' => new PartnerResource($partner)
        ], 200);

    }
    public function destroy(Partner $partner)
    {
        $partner->delete();
        return response()->json([
            'message' => 'Partner deleted Successfully'
        ], 200);
    }


    public function deleteMultiple(Request $request)
    {
        $ids = $request->input('ids'); // Expecting an array of IDs

        if (is_array($ids) && !empty($ids)) {
            Partner::whereIn('id', $ids)->delete();
            return response()->json(['status' => 'success', 'message' => 'Notices deleted successfully.']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Invalid or empty IDs array.'], 400);
        }
    }


}
