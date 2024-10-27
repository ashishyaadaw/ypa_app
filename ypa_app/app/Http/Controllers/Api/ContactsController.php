<?php

namespace App\Http\Controllers\Api;

use App\Models\Contacts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ContactsResource;

class ContactsController extends Controller
{
    //

    public function index()
    {
        $contacts = Contacts::get();
        if ($contacts->count() > 0) {
            return ContactsResource::collection($contacts);
        } else {
            return response()->json(['message' => "No record available"], 200);
        }
    }
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'string|max:255|nullable',
            'description' => 'string|max:255|nullable',
            'email' => 'string|max:255|nullable',
            'mobile' => 'string|max:255|nullable',
            'other' => 'string|max:255|nullable',
            'status' => 'string|nullable',
        ]);
        if (!$validator) {
            return response()->json([
                'message' => 'all field neccessary'
            ]);
        }

        $contact = Contacts::create([
            'name' => $request->name,
            'description' => $request->description,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'other' => $request->other,
            'status' => $request->status,
        ]);

        return response()->json([
            'message' => 'Contacts Created Successfully',
            'data' => new ContactsResource($contact)
        ], 200);

    }

    public function show(Contacts $contact)
    {
        return new ContactsResource($contact);
    }
    public function update(Request $request, Contacts $contact)
    {
        $validator = $request->validate([
            'name' => 'string|max:255|nullable',
            'description' => 'string|max:255|nullable',
            'email' => 'string|max:255|nullable',
            'mobile' => 'string|max:255|nullable',
            'other' => 'string|max:255|nullable',
            'status' => 'string|nullable',
        ]);
        if (!$validator) {
            return response()->json([
                'message' => 'all field neccessary'
            ]);
        }

        $contact->update([
            'name' => $request->name,
            'description' => $request->description,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'other' => $request->other,
            'status' => $request->status,
        ]);

        return response()->json([
            'message' => 'Contacts Updated Successfully',
            'data' => new ContactsResource($contact)
        ], 200);

    }
    public function destroy(Contacts $contact)
    {
        $contact->delete();
        return response()->json([
            'message' => 'Contacts deleted Successfully'
        ], 200);
    }
    public function deleteMultiple(Request $request)
    {
        $ids = $request->input('ids'); // Expecting an array of IDs

        if (is_array($ids) && !empty($ids)) {
            Contacts::whereIn('id', $ids)->delete();
            return response()->json(['status' => 'success', 'message' => 'Contactss deleted successfully.']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Invalid or empty IDs array.'], 400);
        }
    }


}
