<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\InternshipResource;
use App\Models\Internship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InternshipController extends Controller
{
    public function index()
    {
        $internships = Internship::get();
        if ($internships->count() > 0) {
            return InternshipResource::collection($internships);
        } else {
            return response()->json(['message' => "No record available"], 200);
        }
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:internships',
            'phone_number' => 'required|string|max:20',
            'dob' => 'required|date',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip_code' => 'required|string',
            'country' => 'required|string',
            'internship_role' => 'required|string',
            'skills' => 'nullable|string',
            'file_path_resume' => 'nullable|string',
            'file_path' => 'nullable|string',
            'status' => 'nullable|string'
        ]);



        $internship = Internship::create($validatedData);

        return response()->json([
            'message' => 'Internship Created Successfully',
            'data' => new InternshipResource($internship)
        ], 200);
    }

    public function show($id)
    {
        $internship = Internship::find($id);
        return response()->json($internship);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone_number' => 'required|string|max:20',
            'dob' => 'required|date',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip_code' => 'required|string',
            'country' => 'required|string',
            'internship_role' => 'required|string',
            'skills' => 'nullable|string',
            'file_path_resume' => 'nullable|string',
            'file_path' => 'nullable|string',
            'status' => 'nullable|string'
        ]);

        $internship = Internship::findOrFail($id);

        if ($request->hasFile('file')) {
            // Delete the old file if exists
            if ($internship->file_path) {
                Storage::disk('public')->delete($internship->file_path);
            }

            $file = $request->file('file');
            $filePath = $file->store('uploads', 'public');
            $validatedData['file_path'] = $filePath;
        }

        $internship->update($validatedData);

        return response()->json([
            'message' => 'Internship Updated Successfully',
            'data' => new InternshipResource($internship)
        ], 200);
    }

    public function destroy($id)
    {
        $internship = Internship::findOrFail($id);

        // Delete the file if exists
        if ($internship->file_path) {
            Storage::disk('public')->delete($internship->file_path);
        }

        $internship->delete();

        return response()->json([
            'message' => 'Internship deleted Successfully'
        ], 200);
    }

    public function deleteMultiple(Request $request)
    {
        $ids = $request->input('ids'); // Expecting an array of IDs

        if (is_array($ids) && !empty($ids)) {

            foreach ($ids as $id) {
                $internship = Internship::findOrFail($id);
                $internship->delete();
            }


            // InternshipResource::whereIn('id', $ids)->delete();
            return response()->json(['status' => 'success', 'message' => 'Internship deleted successfully.']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Invalid or empty IDs array.'], 400);
        }
    }

}
