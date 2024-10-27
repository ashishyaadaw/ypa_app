<?php

namespace App\Http\Controllers\Api;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BlogResource;

class BlogController extends Controller
{
    //

    public function index()
    {
        $blogs = Blog::get();
        if ($blogs->count() > 0) {
            return BlogResource::collection($blogs);
        } else {
            return response()->json(['message' => "No record available"], 200);
        }
    }
    public function store(Request $request)
    {
        $validator = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'required|string',
            'author' => 'required|string',
            'cover' => 'string',
            'status' => 'string',
        ]);
        if (!$validator) {
            return response()->json([
                'message' => 'all field neccessary'
            ]);
        }

        $blog = Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category,
            'author' => $request->author,
            'cover' => $request->cover,
            'status' => $request->status,
        ]);

        return response()->json([
            'message' => 'Blog Created Successfully',
            'data' => new BlogResource($blog)
        ], 200);

    }

    public function show(Blog $blog)
    {
        return new BlogResource($blog);
    }
    public function update(Request $request, Blog $blog)
    {
        $validator = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'required|string',
            'author' => 'required|string',
            'cover' => 'string',
            'status' => 'string',
        ]);
        if (!$validator) {
            return response()->json([
                'message' => 'all field neccessary'
            ]);
        }

        $blog->update([
            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category,
            'author' => $request->author,
            'cover' => $request->cover,
            'status' => $request->status,
        ]);

        return response()->json([
            'message' => 'Blog Upcategoryd Successfully',
            'data' => new BlogResource($blog)
        ], 200);

    }
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return response()->json([
            'message' => 'Blog deleted Successfully'
        ], 200);
    }
    public function deleteMultiple(Request $request)
    {
        $ids = $request->input('ids'); // Expecting an array of IDs

        if (is_array($ids) && !empty($ids)) {
            Blog::whereIn('id', $ids)->delete();
            return response()->json(['status' => 'success', 'message' => 'Blogs deleted successfully.']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Invalid or empty IDs array.'], 400);
        }
    }


}
