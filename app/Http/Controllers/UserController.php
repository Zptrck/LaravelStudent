<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use PhpParser\Node\NullableType;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Log;
use Illuminate\Auth\Notifications\VerifyEmail;


class UserController extends Controller
{
    public function index(){
        return 'Hello from user controller';
    }

    public function login(){
        return view('user.login');
    }

    public function process(Request $request){
            $validated = $request->validate([

                "email" => ['required','email'],
                'password' => 'required'

            ]);
           // Attempt to log the user in with the provided credentials
             if (Auth::attempt([
                'email' => $validated['email'],     
                'password' => $validated['password']
         ])) {

          
        // Regenerate the session to prevent fixation attacks
              $request->session()->regenerate();
        // Redirect to the home page with a welcome message
        return redirect('/')->with('message', 'Welcome back!');
        }

        // If login fails, you can return an error or redirect back
        return back()->withErrors(['email' => 'Invalid credentials']);

      

        // Check if the user has verified their email
        if (!$user->hasVerifiedEmail()) {
            Auth::logout(); // Log out the user if they haven't verified the email
            return redirect('/login')->with('message', 'Please verify your email before logging in.');
        }
    }

    public function register(){
        return view('user.register');
    }

    public function logout(Request $request){
        auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'Logout Successfully!');
        
    }
 
    public function store(Request $request) {
        
        $validated = $request->validate([
            "name" => ['required', 'min:4'],
            "email" => [' required', 'email', Rule::unique('users', 'email' )],
            "password" => [
                'required', 
                'confirmed', // This checks that the password and confirm password match
                'min:8', // Minimum length of 8 characters
                'regex:/[a-z]/', // At least one lowercase letter
                'regex:/[A-Z]/', // At least one uppercase letter
                'regex:/[0-9]/', // At least one numeric character
                'regex:/[@$!%*?&]/', // At least one special character
            ],
        ]);

        $validated['password'] = Hash::make( $validated['password']);
        $validated['email_verified_at'] = null;

        $user = User::create($validated);

        Auth::login($user);
        
        // Send email verification notification
        $user->sendEmailVerificationNotification();

        return redirect('/email/verify')->with('message', 'Please verify your email address.');
        

    }

    // handle verify email notice
    public function verifyNotice(){
        return view('auth.verify-email');
    }

    //handle email verification 
    public function verifyEmail(EmailVerificationRequest $request) {
        $request->fulfill();
     
        if (Auth::check()) {
            return redirect('/login')->with('message', 'Email verified! Please log in.');
        }
    
        return redirect('/login')->with('message', 'Email verified, but you need to log in.');
    }
    // resending verification
    public function verifyHandler(Request $request) {
        $request->user()->sendEmailVerificationNotification();
    
        return back()->with('message', 'Verification link sent!');


    }






//     public function show($id){
//         $data = ["data" => "data from database"];
//         return view('user')
//         ->with('data', $data)
//         ->with('name', 'Patrick')
//         ->with('age', 22)
//         ->with('email', 'Patrick@gmail.com')
//         ->with('id', $id);
//     }

}