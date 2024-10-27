<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admins;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $this->validateLogin($request);



        $userController = new AdminController();


        // if ($contacts->count() > 0) {
        //     return ContactsResource::collection($contacts);
        // } else {
        //     return response()->json(['message' => "No record available"], 200);
        // }
        // $users = $userController->index()->getData();


        if ($userController->checkEmail($credentials['email'])) {


            if (Auth::attempt($credentials)) {
                // return redirect()->intended('dashboard');

                return redirect()->route('dashboard');

            }


        }



        // if (Auth::attempt($request->only('email', 'password'))) {
        //     return redirect()->intended('dashboard');
        // }

        return $this->sendFailedLoginResponse($request);
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            'email' => [trans('auth.failed')],
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}

// class LoginController extends Controller
// {
//     public function showLoginForm()
//     {
//         return view('auth.login');
//     }

//     public function login(Request $request)
//     {
//         $credentials = $request->only('email', 'password');


//         $userController = new AdminController();
//         $users = $userController->index()->getData();


//         foreach ($users as $user) {
//             if ($user->email === $credentials['email']) {
//                 if (Auth::attempt($credentials)) {
//                     return redirect()->intended('dashboard');
//                 }
//             }
//         }





//         return back()->withErrors([
//             'email' => 'The provided credentials do not match our records.',
//         ]);
//     }

//     public function logout(Request $request)
//     {
//         Auth::logout();
//         return redirect('/login');
//     }
// }
