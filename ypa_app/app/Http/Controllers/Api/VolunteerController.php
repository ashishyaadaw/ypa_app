<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\VolunteerResource;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VolunteerController extends Controller
{
    public function index()
    {
        $volunteers = Volunteer::get();
        if ($volunteers->count() > 0) {
            return VolunteerResource::collection($volunteers);
        } else {
            return response()->json(['message' => "No record available"], 200);
        }
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:volunteers',
            'phone_number' => 'required|string|max:20',
            'dob' => 'required|date',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip_code' => 'required|string',
            'country' => 'required|string',
            'emergency_contact_name' => 'required|string',
            'emergency_contact_phone' => 'required|string|max:20',
            'volunteer_role' => 'required|string',
            'availability' => 'required|string',
            'skills' => 'nullable|string',
            'reason' => 'nullable|string',
            'file_path' => 'nullable|string',
            'status' => 'nullable|string'
        ]);



        $volunteer = Volunteer::create($validatedData);

        return response()->json([
            'message' => 'Volunteer Created Successfully',
            'data' => new VolunteerResource($volunteer)
        ], 200);
    }

    public function show($id)
    {
        $volunteer = Volunteer::find($id);
        return response()->json($volunteer);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:volunteers,email,' . $id,
            'phone_number' => 'required|string|max:20',
            'dob' => 'required|date',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip_code' => 'required|string',
            'country' => 'required|string',
            'emergency_contact_name' => 'required|string',
            'emergency_contact_phone' => 'required|string|max:20',
            'volunteer_role' => 'required|string',
            'availability' => 'required|string',
            'skills' => 'nullable|string',
            'reason' => 'nullable|string',
            'file_path' => 'nullable|string',

            'status' => 'nullable|string'
        ]);

        $volunteer = Volunteer::findOrFail($id);

        if ($request->hasFile('file')) {
            // Delete the old file if exists
            if ($volunteer->file_path) {
                Storage::disk('public')->delete($volunteer->file_path);
            }

            $file = $request->file('file');
            $filePath = $file->store('uploads', 'public');
            $validatedData['file_path'] = $filePath;
        }

        $volunteer->update($validatedData);

        return response()->json([
            'message' => 'Volunteer Updated Successfully',
            'data' => new VolunteerResource($volunteer)
        ], 200);
    }

    public function destroy($id)
    {
        $volunteer = Volunteer::findOrFail($id);

        // Delete the file if exists
        if ($volunteer->file_path) {
            Storage::disk('public')->delete($volunteer->file_path);
        }

        $volunteer->delete();

        return response()->json([
            'message' => 'Volunteer deleted Successfully'
        ], 200);
    }

    public function deleteMultiple(Request $request)
    {
        $ids = $request->input('ids'); // Expecting an array of IDs

        if (is_array($ids) && !empty($ids)) {

            foreach ($ids as $id) {
                $volunteer = Volunteer::findOrFail($id);
                $volunteer->delete();
            }


            // VolunteerResource::whereIn('id', $ids)->delete();
            return response()->json(['status' => 'success', 'message' => 'Volunteer deleted successfully.']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Invalid or empty IDs array.'], 400);
        }
    }

}
