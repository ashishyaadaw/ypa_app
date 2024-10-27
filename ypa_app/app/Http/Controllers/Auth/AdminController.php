<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admins;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = Admins::all()->map(function ($user) {
            return [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->role,
                'status' => $user->status,
            ];
        });

        return response()->json($users);
    }

    public function checkEmail($email)
    {
        $admin = Admins::where('email', $email)->first();

        if ($admin) {
            // return response()->json(['status' => 'found', 'admin' => $admin]);
            return true;
        } else {
            // return response()->json(['status' => 'not found']);
            return false;
        }
    }

}
