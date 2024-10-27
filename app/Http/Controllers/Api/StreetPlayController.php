<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StreetPlayArtistResource;
use App\Models\StreetPlayArtist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StreetPlayController extends Controller
{
    public function index()
    {
        $artists = StreetPlayArtist::all();
        if ($artists->count() > 0) {
            return StreetPlayArtistResource::collection($artists);
        } else {
            return response()->json(['message' => "No record available"], 200);
        }
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:street_play_artists',
            'phone_number' => 'required|string|max:20',
            'dob' => 'required|date',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip_code' => 'required|string',
            'country' => 'required|string',
            'preferred_role' => 'required|string',
            'experience_level' => 'required|string',
            'skills' => 'nullable|string',
            'previous_performances' => 'nullable|string',
            'motivation' => 'nullable|string',
            'file_path' => 'nullable|string',
            'status' => 'nullable|string',
        ]);


        $artist = StreetPlayArtist::create($validatedData);

        return response()->json([
            'message' => 'Form Submitted Successfully',
            'data' => new StreetPlayArtistResource($artist)
        ], 200);
    }

    public function show($id)
    {
        $artist = StreetPlayArtist::find($id);

        if (!$artist) {
            return response()->json(['status' => 'error', 'message' => 'Artist not found'], 404);
        }

        return response()->json($artist);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'dob' => 'required|date',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip_code' => 'required|string',
            'country' => 'required|string',
            'preferred_role' => 'required|string',
            'experience_level' => 'required|string',
            'skills' => 'nullable|string',
            'previous_performances' => 'nullable|string',
            'motivation' => 'nullable|string',
            'file_path' => 'nullable|string',
            'status' => 'nullable|string',
        ]);

        $artist = StreetPlayArtist::findOrFail($id);

        $artist->update($validatedData);

        return response()->json([
            'message' => 'Street Play Artist Form Update Successfully',
            'data' => new StreetPlayArtistResource($artist)
        ], 200);
    }

    public function destroy($id)
    {
        $artist = StreetPlayArtist::findOrFail($id);

        // Delete the file if it exists
        if ($artist->file_path) {
            Storage::disk('public')->delete($artist->file_path);
        }

        $artist->delete();

        return response()->json(['status' => 'success', 'message' => 'Street Artist deleted successfully.']);
    }
    public function deleteMultiple(Request $request)
    {
        $ids = $request->input('ids'); // Expecting an array of IDs

        if (is_array($ids) && !empty($ids)) {
            StreetPlayArtist::whereIn('id', $ids)->delete();
            return response()->json(['status' => 'success', 'message' => 'Street Artist deleted successfully.']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Invalid or empty IDs array.'], 400);
        }
    }

}
