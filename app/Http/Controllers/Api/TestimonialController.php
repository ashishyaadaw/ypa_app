<?php

namespace App\Http\Controllers\Api;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TestimonialResource;

class TestimonialController extends Controller
{
    //

    public function index()
    {
        $testimonials = Testimonial::get();
        if ($testimonials->count() > 0) {
            return TestimonialResource::collection($testimonials);
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

        $testimonial = Testimonial::create([
            'title' => $request->title,
            'name' => $request->name,
            'contents' => $request->contents,
            'href' => $request->href,
            'status' => $request->status,
        ]);

        return response()->json([
            'message' => 'Testimonial Created Successfully',
            'data' => new TestimonialResource(resource: $testimonial)
        ], 200);

    }

    public function show(Testimonial $testimonial)
    {
        return new TestimonialResource($testimonial);
    }
    public function update(Request $request, Testimonial $testimonial)
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

        $testimonial->update([
            'title' => $request->title,
            'name' => $request->name,
            'contents' => $request->contents,
            'href' => $request->href,
            'status' => $request->status,
        ]);

        return response()->json([
            'message' => 'Testimonial Updated Successfully',
            'data' => new TestimonialResource($testimonial)
        ], 200);

    }
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return response()->json([
            'message' => 'Testimonial deleted Successfully'
        ], 200);
    }


    public function deleteMultiple(Request $request)
    {
        $ids = $request->input('ids'); // Expecting an array of IDs

        if (is_array($ids) && !empty($ids)) {
            Testimonial::whereIn('id', $ids)->delete();
            return response()->json(['status' => 'success', 'message' => 'Notices deleted successfully.']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Invalid or empty IDs array.'], 400);
        }
    }


}
