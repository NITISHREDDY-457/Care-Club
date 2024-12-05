<?php
namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    
use Illuminate\Support\Facades\Hash;
    use App\Models\User;
    

    class AuthController extends Controller
    {
        // Show login form
        public function showLoginForm()
        {
            return view('auth.login');
        }

        // Handle login
        public function login(Request $request)
        {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if (Auth::attempt($request->only('email', 'password'))) {
                return redirect()->intended('/')->with('success', 'Logged in successfully!');
            }

            return back()->withErrors(['email' => 'Invalid credentials']);
        }

        // Show signup form
        public function showSignupForm()
        {
            return view('auth.signup');
        }

        // Handle signup
        public function signup(Request $request)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|confirmed',
            ]);

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            return redirect('/login')->with('success', 'Account created successfully! Please login.');
        }

        // Logout
        public function logout()
        {
            Auth::logout();
            return redirect('/login')->with('success', 'Logged out successfully.');
        }
    }
