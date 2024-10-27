<?php

namespace App\Http\Controllers\Api;

use App\Models\Form;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\FormResource;

class FormController extends Controller
{
    //

    public function index()
    {
        $forms = Form::get();
        if ($forms->count() > 0) {
            return FormResource::collection($forms);
        } else {
            return response()->json(['message' => "No record available"], 200);
        }
    }
    public function store(Request $request)
    {
        $validator = $request->validate([
            'form_name' => 'required|string|max:255',
            'form_field' => 'required|string',
            'status' => 'string',
            'message' => 'string',
        ]);
        if (!$validator) {
            return response()->json([
                'message' => 'all field neccessary'
            ]);
        }

        $form = Form::create([
            'form_name' => $request->form_name,
            'form_field' => $request->form_field,
            'status' => $request->status,
            'message' => $request->message,
        ]);

        return response()->json([
            'message' => 'Form Created Successfully',
            'data' => new FormResource($form)
        ], 200);

    }

    public function show(Form $form)
    {
        return new FormResource($form);
    }
    public function update(Request $request, Form $form)
    {
        $validator = $request->validate([
            'form_name' => 'required|string|max:255',
            'form_field' => 'required|string',
            'status' => 'string',
            'message' => 'string',
        ]);
        if (!$validator) {
            return response()->json([
                'message' => 'all field neccessary'
            ]);
        }

        $form->update([
            'form_name' => $request->form_name,
            'form_field' => $request->form_field,
            'status' => $request->status,
            'message' => $request->message,
        ]);

        return response()->json([
            'message' => 'Form Updated Successfully',
            'data' => new FormResource($form)
        ], 200);

    }
    public function destroy(Form $form)
    {
        $form->delete();
        return response()->json([
            'message' => 'Form deleted Successfully'
        ], 200);
    }
    public function deleteMultiple(Request $request)
    {
        $ids = $request->input('ids'); // Expecting an array of IDs

        if (is_array($ids) && !empty($ids)) {
            Form::whereIn('id', $ids)->delete();
            return response()->json(['status' => 'success', 'message' => 'Forms deleted successfully.']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Invalid or empty IDs array.'], 400);
        }
    }


}
